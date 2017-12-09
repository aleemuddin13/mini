<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="dist/js/bootstrap-colorpicker.js"></script>
<script src="src/js/docs.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
<link href="src/css/docs.css" rel="stylesheet">
<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<p>Resize the image using the 4 draggable corner anchors</p>

<p>You can also drag the image</p>
<div class="container" style="position:relative">
    <div class="row">
        <canvas id="canvas2" width=350 height=350></canvas>  
        <canvas id="canvas" width="350" height="350" style="position:absolute;top:0;left:0"></canvas>
        
    </div>
</div>
<div class="container">
    <div class="row" >
        <div class="col-lg-6">
            <input type="text" id="demo_size" value="#ffaa00" style="width:100%"/>
        </div>
    </div>
</div>
<style>
    .colorpicker-2x .colorpicker-saturation {
        width: 200px;
        height: 200px;
    }
    .colorpicker-2x .colorpicker-hue,
    .colorpicker-2x .colorpicker-alpha {
        width: 30px;
        height: 200px;
    }
    .colorpicker-2x .colorpicker-color,
    .colorpicker-2x .colorpicker-color div{
        height: 30px;
    }
</style>

<script>
    $(function(){
        $('#demo_size').colorpicker({
            customClass: 'colorpicker-2x',
            sliders: {
                saturation: {
                    maxLeft: 200,
                    maxTop: 200
                },
                hue: {
                    maxTop: 200
                },
                alpha: {
                    maxTop: 200
                }
            }
        });
    });
    $('#demo_size').colorpicker().on('changeColor.colorpicker', function(event){
        restart($(this).val());
});
    
</script>
<script>
    function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}
var canvas2 = document.getElementById("canvas2");
var ctx2 = canvas2.getContext("2d");

var img2 = new Image();
img2.crossOrigin = "anonymous";
img2.onload = start;
img2.src = "images/blank_tshirtb.png";

function start(){
    ctx2.save();
    ctx2.drawImage(img2, 0,0);
    var pix = ctx2.getImageData(0,0,img2.width,img2.height);
    var data = pix.data;

    for (var i = 0; i < data.length; i += 4) {
        alpha = data[i + 3];

        // skip transparent/semiTransparent pixels
        if (alpha < 200) {
            continue;
        }
            data[i + 0] = 190
            data[i + 1] = 22
            data[i + 2] = 25;
        }
    ctx2.putImageData(pix, 0, 0);
    ctx2.globalAlpha = 0.3;
    ctx2.drawImage(img2, 0, 0);
    }
function restart(hex){
    ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
    var myrgb = hexToRgb(hex);
        ctx2.save();
    ctx2.drawImage(img2, 0,0);
    var pix = ctx2.getImageData(0,0,img2.width,img2.height);
    var data = pix.data;

    for (var i = 0; i < data.length; i += 4) {
        alpha = data[i + 3];

        // skip transparent/semiTransparent pixels
        if (alpha < 200) {
            continue;
        }
            data[i + 0] = myrgb.r;
            data[i + 1] = myrgb.g;
            data[i + 2] = myrgb.b;
        }
    ctx2.putImageData(pix, 0, 0);
    ctx2.globalAlpha = 0.3;
    ctx2.drawImage(img2, 0, 0);
    ctx2.globalAlpha = 1;
    }
</script>
<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");

var canvasOffset = $("#canvas").offset();
var offsetX = canvasOffset.left;
var offsetY = canvasOffset.top;

var startX;
var startY;
var isDown = false;


var pi2 = Math.PI * 2;
var resizerRadius = 8;
var rr = resizerRadius * resizerRadius;
var draggingResizer = {
    x: 0,
    y: 0
};
var imageX = 50;
var imageY = 50;
var imageWidth, imageHeight, imageRight, imageBottom;
var draggingImage = false;
var startX;
var startY;



var img = new Image();
img.onload = function () {
    imageWidth = img.width;
    imageHeight = img.height;
    imageRight = imageX + imageWidth;
    imageBottom = imageY + imageHeight
    draw(true, false);
}
img.src = "images/logo_1.png";


function draw(withAnchors, withBorders) {

    // clear the canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    // draw the image
    ctx.drawImage(img, 0, 0, img.width, img.height, imageX, imageY, imageWidth, imageHeight);

    // optionally draw the draggable anchors
    if (withAnchors) {
        drawDragAnchor(imageX, imageY);
        drawDragAnchor(imageRight, imageY);
        drawDragAnchor(imageRight, imageBottom);
        drawDragAnchor(imageX, imageBottom);
    }

    // optionally draw the connecting anchor lines
    if (withBorders) {
        ctx.beginPath();
        ctx.moveTo(imageX, imageY);
        ctx.lineTo(imageRight, imageY);
        ctx.lineTo(imageRight, imageBottom);
        ctx.lineTo(imageX, imageBottom);
        ctx.closePath();
        ctx.stroke();
    }

}

function drawDragAnchor(x, y) {
    ctx.beginPath();
    ctx.arc(x, y, resizerRadius, 0, pi2, false);
    ctx.closePath();
    ctx.fill();
}

function anchorHitTest(x, y) {

    var dx, dy;

    // top-left
    dx = x - imageX;
    dy = y - imageY;
    if (dx * dx + dy * dy <= rr) {
        return (0);
    }
    // top-right
    dx = x - imageRight;
    dy = y - imageY;
    if (dx * dx + dy * dy <= rr) {
        return (1);
    }
    // bottom-right
    dx = x - imageRight;
    dy = y - imageBottom;
    if (dx * dx + dy * dy <= rr) {
        return (2);
    }
    // bottom-left
    dx = x - imageX;
    dy = y - imageBottom;
    if (dx * dx + dy * dy <= rr) {
        return (3);
    }
    return (-1);

}


function hitImage(x, y) {
    return (x > imageX && x < imageX + imageWidth && y > imageY && y < imageY + imageHeight);
}


function handleMouseDown(e) {
    startX = parseInt(e.clientX - offsetX);
    startY = parseInt(e.clientY - offsetY);
    draggingResizer = anchorHitTest(startX, startY);
    draggingImage = draggingResizer < 0 && hitImage(startX, startY);
}

function handleMouseUp(e) {
    draggingResizer = -1;
    draggingImage = false;
    draw(true, false);
}

function handleMouseOut(e) {
    handleMouseUp(e);
}

function handleMouseMove(e) {

    if (draggingResizer > -1) {

        mouseX = parseInt(e.clientX - offsetX);
        mouseY = parseInt(e.clientY - offsetY);

        // resize the image
        switch (draggingResizer) {
            case 0:
                //top-left
                imageX = mouseX;
                imageWidth = imageRight - mouseX;
                imageY = mouseY;
                imageHeight = imageBottom - mouseY;
                break;
            case 1:
                //top-right
                imageY = mouseY;
                imageWidth = mouseX - imageX;
                imageHeight = imageBottom - mouseY;
                break;
            case 2:
                //bottom-right
                imageWidth = mouseX - imageX;
                imageHeight = mouseY - imageY;
                break;
            case 3:
                //bottom-left
                imageX = mouseX;
                imageWidth = imageRight - mouseX;
                imageHeight = mouseY - imageY;
                break;
        }

        if(imageWidth<25){imageWidth=25;}
        if(imageHeight<25){imageHeight=25;}

        // set the image right and bottom
        imageRight = imageX + imageWidth;
        imageBottom = imageY + imageHeight;

        // redraw the image with resizing anchors
        draw(true, true);

    } else if (draggingImage) {

        imageClick = false;

        mouseX = parseInt(e.clientX - offsetX);
        mouseY = parseInt(e.clientY - offsetY);

        // move the image by the amount of the latest drag
        var dx = mouseX - startX;
        var dy = mouseY - startY;
        imageX += dx;
        imageY += dy;
        imageRight += dx;
        imageBottom += dy;
        // reset the startXY for next time
        startX = mouseX;
        startY = mouseY;

        // redraw the image with border
        draw(false, true);

    }


}


$("#canvas").mousedown(function (e) {
    handleMouseDown(e);
});
$("#canvas").mousemove(function (e) {
    handleMouseMove(e);
});
$("#canvas").mouseup(function (e) {
    handleMouseUp(e);
});
$("#canvas").mouseout(function (e) {
    handleMouseOut(e);
    draw(false,false);
});
</script>