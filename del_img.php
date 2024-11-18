<?php
include_once "function.php";
$id=$_GET['id'];
$row=find('imgs',$id);
// 函式也可當變數 
$imgName=$row['filename'];

unlink("./files/$imgName");
del("imgs",$id);
//$imgName=find('imgs',$id)['filename'];
header("location:manage.php");
