<?php

include "header.php";

$image=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["name"],"image/".$_FILES["file"]["name"]);
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$pname=$_REQUEST['pname'];
$ptype=$_REQUEST['producttype'];
$brand=$_REQUEST['brand'];
$imag=$_REQUEST['file_image'];
$desc=$_REQUEST['desc'];
$cam=$_REQUEST['camera'];
$ram=$_REQUEST['ram'];
$os=$_REQUEST['os'];
$version=$_REQUEST['version'];
$cost=$_REQUEST['cost'];


$sql="INSERT INTO `cart`.`products` ( `pname`, `ptype`, `btype`, `image`, `desc`,`cam`,`ram`,`os`,`version`, `cost`) VALUES ('$pname','$ptype','$brand','$imag','$desc','$cam','$ram','$os','$version','$cost')";

$result=mysql_query($sql,$con) or die(mysql_error());

header("location:admin.php");
 


include "footer.php";
?>