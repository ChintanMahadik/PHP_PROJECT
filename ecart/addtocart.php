<?php

include "header.php";

if(isset($_SESSION['cid']) && isset($_SESSION['pid']))
{
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$pid=$_SESSION['pid'];
$cid=$_SESSION['cid'];
 $sql="INSERT INTO cart.cartt ( `cid`, `pid`) VALUES ( '$cid', '$pid')";
$result=mysql_query($sql,$con) or die(mysql_error());
}
header("location:index.php");
include "footer.php";
?>