
<?php

include "header.php";

$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$sql1="SELECT * FROM login where username='$username' and password='$password'";
$result1=mysql_query($sql1,$con) or die(mysql_error());

$sql2="SELECT * FROM admin where username='$username' and password='$password'";
$result2=mysql_query($sql2,$con) or die(mysql_error());


/////////////////////////////////////////////////////////////admin///////////////////////////////////////

if(mysql_num_rows($result2)>0 && $username!=NULL)
{
	
while($row2=mysql_fetch_array($result2))
{
$_SESSION['cid']=$row2['cid'];
header("location:admin.php");
 }
 }
else
{
	
if(mysql_num_rows($result1)>0 && $username!=NULL)
{
	
while($row1=mysql_fetch_array($result1))
{

$_SESSION['cid']=$row1['cid']; //cid from login table [session variable]//
header("location:addtocart.php");
 }
 }
else
{
header("location:register.php");
}
	
}

include "footer.php";

?>
