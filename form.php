<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>


<!-- CanvasJs.com javascript file for graphs -->
<script src="js/canvasjs.min.js"></script>
    </head>
    <body>
        <form class="form-control" style="text-align: center" action="sorder.php" method="POST" >
            <label for="username">Name :</label>
            <input type="text" name="username" id="username"><br>
            <label for="cno">Contact no :</label>
            <input type="text" name="cno" id="cno"><br>
            
            <b style="float: left;margin-left:20%" >Address:</b>
            <textarea class="form-control" name="address" style="width:50%">
                
            </textarea>
            <input type="submit" class="btn btn-primary" value="order">
        </form>
    </body>
</html>
