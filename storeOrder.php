<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'db.php';
$query = "select max(id) m from myorders";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);
$url = $row['m']+1;

$data1 = $_POST['data1'];
$query = "insert into myorders values('$url','{$data1['firstName']}','{$data1['lastName']}','{$data1['email']}'"
. ",'{$data1['cno']}','{$data1['address']}',0)";
mysql_query($query) or die(mysql_error()+$query);
$data2 = $_POST['data2'];
$img = $data2['url1'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
//saving
$fileName = "userImages/$url"."a.png";
file_put_contents($fileName, $fileData);



$img = $data2['url2'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$fileData = base64_decode($img);
//saving
$fileName = "userImages/$url"."b.png";
file_put_contents($fileName, $fileData);
$arr['id'] = $url;
echo json_encode($arr);