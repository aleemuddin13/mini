<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if($_POST['username']!="dragon" || $_POST['password']!="12345"){
    header("Location:login.php");
}
session_start();
$_SESSION['user'] = TRUE;
header("Location:orders.php");
    