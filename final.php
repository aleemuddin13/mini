<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ellitify || Design your own T-Shirts</title>
        <!-- Css themes -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="dist/css/bootstrap-colorpicker.min.css"  rel="stylesheet">
        <link href="src/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <!--<link href="css/jsCarousel-2.0.0.css" rel="stylesheet" type="text/css" />-->
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/final.css">
        
        
    </head>
    <body>
        <!--<canvas id="canvas" width=350 height=350 style=""></canvas>-->
        <div class="container" >
            <div class="row">
                <div class="col-lg-12" id="marginTop"></div>
                <div class="col-lg-2">
      
<div id="amazingcarousel-container-1">
    <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:100px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
    <img src="images/blank_tshirtb.png"  alt="blank_tshirtb" class="mainImage" />
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container" >
<div class="amazingcarousel-image">
	<img src="images/sleeve.png"  alt="sleeve" class="mainImage" />
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images/collar.png"  alt="collar" class="mainImage" />
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images/sleeve.png"  alt="sleeve" class="mainImage"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images/sleevelss.png"  alt="sleevelss" class="mainImage"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images/she.png"  alt="she" class="mainImage"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images/ssss.png"  alt="ssss" class="mainImage"/>
</div>                    </div>
                </li>
            </ul>
            <div class="amazingcarousel-prev"></div>
            <div class="amazingcarousel-next"></div>
        </div>
        <div class="amazingcarousel-nav"></div>
        <div class="amazingcarousel-engine"><a href="http://amazingcarousel.com">jQuery Image Scroller</a></div>
    </div>
</div>
                    
                </div>
                <div class="col-lg-8 row" id="mainContainer" style="position:relative;">
                    <div class="outputa1 col-lg-6" id="imageBackground">
                        <canvas height="400px" style="width:100%" id="canvas2"></canvas>
                        <canvas id="canvas" width="400px" height="400" style="position:absolute;top:0;left:0;"></canvas>
                    </div>
                    <div class="outputb1 col-lg-6 row">
                        <div class="col-lg-12 row" >
                            <div class="col-lg-6" style="margin-top:5px;">
                                <b>Background Color : </b>
                            </div>
                            <div class="input-group backgroundPicker col-lg-6 row" >
                                    <input type="text" value="" class="form-control" id="backgroundPickerVal" />
                                    <span class="input-group-addon"><i></i></span>
                            </div>
                        </div>
                        <div class="col-lg-12 row" >
                            <div class="col-lg-6" style="margin-top:5px;">
                                <b>Image Color : </b>
                            </div>
                            <div class="input-group imagePicker col-lg-6 row" >
                                    <input type="text" value="" class="form-control" id="imagePickerVal" />
                                    <span class="input-group-addon"><i></i></span>
                            </div>
                        </div>
                        <div class="col-lg-12 row">
                            <div class="col-lg-5" style="margin-top:5px;">
                                <b>Saturation : </b>
                            </div>
                            <div class="col-lg-7">
                                <input type="range" min=0 max=1 step=0.1 onchange="changeAlpha(value)" value="0.3">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="col-lg-7">
                                <input type="checkbox" name="logo" id="logoCheck" checked="true">
                            </div>
                            <div class="col-lg-5" style="margin-top:5px;">
                                <b>Logo </b>
                            </div>
                            
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control" placeholder="First Name">
                        </div>
                        <div class="col-lg-6">
                            <input class="form-control" placeholder="Last Name">
                        </div>
                        <div class="col-lg-12">
                            <textarea></textarea>
                        </div>
                        <div class="col-lg-11 btn btn-primary" id="orderg"><h3>Order Design</h3></div>
                </div>
                </div>
                <div class="col-lg-2">
                   <div id="amazingcarousel-container-3">
    <div id="amazingcarousel-3" style="display:none;position:relative;width:100%;max-width:100px;margin:0px auto 0px;">
        <div class="amazingcarousel-list-container">
            <ul class="amazingcarousel-list">
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
    <img src="images2/adidas-logo.png"  alt="adidas-logo" class="mainLogo"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images2/Dota-2(4x3)1-1.png"  alt="Dota-2(4x3)1-1" class="mainLogo"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images2/logo (1).png"  alt="logo (1)" class="mainLogo"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images2/logo2.png"  alt="logo2" class="mainLogo"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images2/logo3.png"  alt="logo3" class="mainLogo"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images2/logo4.png"  alt="logo4" class="mainLogo"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
	<img src="images2/logo-svg.png"  alt="logo-svg" class="mainLogo"/>
</div>                    </div>
                </li>
            </ul>
            <div class="amazingcarousel-prev"></div>
            <div class="amazingcarousel-next"></div>
        </div>
        <div class="amazingcarousel-nav"></div>
        <div class="amazingcarousel-engine"><a href="http://amazingcarousel.com">jQuery Scroller</a></div>
    </div>
</div>
                </div>
                
            </div>
        </div>
    </body>
    
<!--    <script src="js/jquery.js"></script>-->
<script src="aa/jquery.js"></script>
    <script src="aa/amazingcarousel.js"></script>
    <link rel="stylesheet" type="text/css" href="aa/initcarousel-1.css">
    <script src="aa/initcarousel-1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="aaa/amazingcarousel.js"></script>-->
    <link rel="stylesheet" type="text/css" href="aaa/initcarousel-3.css">
    <script src="aaa/initcarousel-3.js"></script>
    <script src="dist/js/bootstrap-colorpicker.js"></script>
    <script src="src/js/docs.js"></script>
    <!--<script src="js/jsCarousel-2.0.0.js" type="text/javascript"></script>-->
    <!--<script src="js/slick.min.js"></script>-->
    <script src="js/final.js"></script>

</html>
