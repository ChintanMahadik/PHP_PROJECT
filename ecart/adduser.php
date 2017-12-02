<?php

include "header.php";

$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$contact=$_REQUEST['cno'];
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$email=$_REQUEST['email'];
$country=$_REQUEST['country'];
$pincode=$_REQUEST['pcode'];


$sql1="INSERT INTO `cart`.`user` ( `fname`, `lname`, `contact`,`username`,`password`,`email`, `country`, `pincode`) VALUES ('$fname','$lname','$contact','$username','$password','$email','$country','$pincode')";

$sql2="INSERT INTO `cart`.`login` (`username`,`password`) VALUES ('$username','$password')";

$sql3="SELECT * FROM login where username='$username' and password='$password'";

$result1=mysql_query($sql1,$con) or die(mysql_error());

$result2=mysql_query($sql2,$con) or die(mysql_error());

$result3=mysql_query($sql3,$con) or die(mysql_error());


if(mysql_num_rows($result3)>0)
{
	
while($row3=mysql_fetch_array($result3))
{
session_start();	
$_SESSION['cid']=$row3['cid']; //cid from login table [session variable]//

 }
 }

header("location:index.php");
 
include "footer.php";
?>