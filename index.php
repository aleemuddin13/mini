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

        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner" style="border-bottom:1px solid black">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="../" class="navbar-brand">Elitify</a>
    </div>
    <nav id="bs-navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li>
          <a href="../getting-started/"></a>
        </li>
        <li>
          <a href="../css/"></a>
        </li>
        <li class="active">
          <a href="../components/"></a>
        </li>
        <li>
          <a href="../javascript/"></a>
        </li>
        <li>
          <a href="../customize/"></a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Themes');">Home</a></li>
        <li><a href="#" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Expo');">About</a></li>
        <li><a href="login.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Blog');">Login</a></li>
      </ul>
    </nav>
  </div>
</header>


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
    <img src="images/sleeve.png"  alt="sleeve" class="splImage"  id="s2"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
    <img src="images/collar.png"  alt="collar" class="splImage" id="s3"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
    <img src="images/collarwithsleeve.png"  alt="collar with sleeve" class="splImage" id="s1"/>
</div>                    </div>
                </li>
                <li class="amazingcarousel-item">
                    <div class="amazingcarousel-item-container">
<div class="amazingcarousel-image">
    <img src="images/sleevelss.png"  alt="sleevelss" class="splImage" id="s4"/>
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
                <div class="col-lg-8 row" id="mainContainer" style="color:white">
                    <div class="outputa1 col-lg-6" id="imageBackground" style="position:relative;">
                        <canvas height="400px" style="width:100%"  id="canvas2"></canvas>
                        <canvas id="canvas" width="400px" height="400" style="position:absolute;top:0;left:0;"></canvas>
                        <!-- <canvas id="canvas3" width="500px" height="400px" hidden=""></canvas> -->
                    </div>
                    <div class="outputb1 col-lg-6 row" style="margin-top:25px;">
                        <div class="col-lg-12 row" >
                            <div class="col-lg-6" style="margin-top:5px;">
                                <b>Background Color : </b>
                            </div>
                            <div class="input-group backgroundPicker col-lg-6 row" >
                                    <input type="text" value="" class="form-control" id="backgroundPickerVal" />
                                    <span class="input-group-addon"><i></i></span>
                            </div>
                        </div>
                        <div class="col-lg-12 row" style="margin-top:5px">
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
                            <div class="col-lg-5" style="margin-top:1px;">
                                <b>Logo </b>
                            </div>

                        </div>
                        <div class="col-lg-12" id="cscb" hidden="" >
                            <div class="col-lg-3">
                                <input type="checkbox" name="sleeve"  checked="true" id="a2">
                            </div>
                            <div class="col-lg-3" style="margin-top:1px;border-right:1px solid black">
                                <b>Sleeve </b>
                            </div>
                            <div class="col-lg-3">
                                <input type="checkbox" name="collar"  checked="true" id="a1">
                            </div>
                            <div class="col-lg-3" style="margin-top:1px;">
                                <b>Collar  </b>
                            </div>
                        </div>
                        <div style="background-color:whitesmoke;margin-left:10px;margin-top:20px;padding-top:20px"  class="col-lg-12 row">
                            <div class="col-lg-6">
                                <input class="form-control" placeholder="First Name" id="firstName">
                            </div>
                            <div class="col-lg-6">
                                <input class="form-control" placeholder="Last Name" id="lastName">
                            </div>
                            <div class="col-lg-6" style="margin-top:5px">
                                <input class="form-control" placeholder="Email" id="email">
                            </div>
                            <div class="col-lg-6" style="margin-top:5px">
                                <input class="form-control" placeholder="Contact No :" id="cno">
                            </div>
                            <div class="col-lg-12" style="margin-top:5px">
                                <textarea class="form-control" rows="3" placeholder="Address :" id="address"></textarea>
                            </div>
                            <div class="col-lg-11 btn btn-primary" id="orderg" style="margin-top:5px;margin-left:15px"><h3>Order Design</h3></div>
                            <div class="col-lg-11" style="margin-left:15px;text-align:center;color:blue"><h3>Price : 400rs</h3></div>
                        </div>

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
    <img src="images2/pris.png"  alt="adidas-logo" class="mainLogo"/>
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
    <link rel="stylesheet" type="text/css" href="aaaaa/initcarousel-3.css">
    <script src="aaaaa/initcarousel-3.js"></script>
    <script src="dist/js/bootstrap-colorpicker.js"></script>
    <script src="src/js/docs.js"></script>
    <!--<script src="js/jsCarousel-2.0.0.js" type="text/javascript"></script>-->
    <!--<script src="js/slick.min.js"></script>-->
    <script src="js/final.js"></script>

</html>
<!-- set up the modal to start hidden and fade in and out -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div style="clear: both">
            <h3 style="float:left">Your Order have been succesfully placed and your order id is </h3>
            <h3 id="ordermsg" style=""></h3>
        </div>

      </div>
      <!-- dialog buttons -->
      <div class="modal-footer"><button type="button" class="btn btn-primary"  data-dismiss="modal">OK</button></div>
    </div>
  </div>
</div>

<!-- sometime later, probably inside your on load event callback -->
<script>


</script>
