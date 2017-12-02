<?php
include "header.php";
?>

<html>
<head>
<title>
REGISTRATION
</title>
<link rel="stylesheet" href="reg.css">
</head>
<body id="back">
<style>
margin-top:"200px";
</style>
<center>
</center>
<form id="frm1">
<table>
<tr>
<td><br><font color="white">
<?php
//session_start();

$var=isset($_SESSION['cid']);

if($var)
{

$con=mysql_connect('localhost','root'.'');
$id=$_SESSION['cid'];
mysql_select_db('cart',$con);

$sql="SELECT * FROM products,cartt where cartt.pid=products.pid and cartt.cid=$id";
$result=mysql_query($sql,$con) or die(mysql_error());


while($row=mysql_fetch_array($result))
{
 
 echo "<img id='i' src='image/".$row['image']."' >";

 echo "<a href='buy.php?id=".$row['pid']."'><font color='white' size='4'>".$row['pname']."</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
 
}
}
else
{
?>
<div style="float:left;margin-left:50px;margin-top:110px;">
<img src="images/iphone.gif" height="300" width="300"></img>
</div>
	
	<div style="float:left;margin-top:100px;margin-left:-20px; text-align:center;">
	<font size="5" color="yellow"><b><i>Please Login to see your CART</i></b></font>
	</div>
	
<div style="float:left;margin-left:300px;margin-top:-15px;">
 <img src="images/iphone.gif" height="300" width="300"></img>
</div>



<?php
}
?>

</td>
<br><br>
</tr>


</table>

 </form>
 </center>
 
 </body>
 </html>
 
 <?php
include "footer.php";
?>