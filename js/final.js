/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var imageSrc = "images/pl.png";

var canvas2 = document.getElementById("canvas2");
var ctx2 = canvas2.getContext("2d");
var myImageWidth = canvas2.width;
var myImageHeight = canvas2.height;
var globalAlpha = 0.3;
var hex = "#FFFFFF";
var img2 = new Image();
img2.onload = function(){
    var width = img2.width;
    var height = img2.height;
    if(myImageWidth>width&&myImageHeight>height)
    {
        myImageWidth = width;
        myImageHeight = height;         
    }
    ctx2.drawImage(img2,0,0,myImageWidth,myImageHeight);
};
img2.src = imageSrc;
        
function restart(){
    ctx2.clearRect(0, 0, canvas2.width, canvas2.height);
    var myrgb = hexToRgb(hex);
        ctx2.save();
    ctx2.drawImage(img2,0,0,myImageWidth,myImageHeight);
    var pix = ctx2.getImageData(0,0,myImageWidth,myImageHeight);
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
    ctx2.globalAlpha = globalAlpha;
    ctx2.drawImage(img2, 0, 0,myImageWidth,myImageHeight);
    ctx2.globalAlpha = 1;
}

function changeAlpha(value){
    globalAlpha = value;
    restart();
}
$(function(){
        $('.backgroundPicker').colorpicker();
        $('.backgroundPicker').colorpicker().on('changeColor.colorpicker', function(event){
            $('#imageBackground').css("background-color",$('#backgroundPickerVal').val());    
        });
        $('.imagePicker').colorpicker();
        $('.imagePicker').colorpicker().on('changeColor.colorpicker', function(event){
            hex = $('#imagePickerVal').val()
            restart();    
        });
});

function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}       


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

function imageChanged(src){
     img2 = new Image();
img2.onload = function(){
    var width = img2.width;
    var height = img2.height;
    if(myImageWidth>width&&myImageHeight>height)
    {
        myImageWidth = width;
        myImageHeight = height;         
    }
    ctx2.drawImage(img2,0,0,myImageWidth,myImageHeight);
};
img2.src = src;
restart();
}

$('.mainImage').click(function(){
    imageChanged($(this).attr('src'));
})
$('.mainLogo').click(function(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    var src = $(this).attr('src');
    img = new Image();
img.onload = function () {
    imageWidth = img.width;
    imageHeight = img.height;
    imageRight = imageX + imageWidth;
    imageBottom = imageY + imageHeight
    draw(true, false);
}
img.src = src;
})
$('#logoCheck').click(function(){
   if($(this).is(':checked'))
   {
       draw(true,false);
   }
   else{
       ctx.clearRect(0, 0, canvas.width, canvas.height);
   }
       
});