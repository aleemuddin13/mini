<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'db.php';
$id = $_GET['id'];
$query = "update myorders set isCompleted=1 where id=$id";
mysql_query($query) or die(mysql_error());
header("Location:orders.php");