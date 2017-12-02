
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

<form id="frm1" action="addtocart.php" method="post">

<div style="width:400px;float:left;height:500px;">

<table>
<tr>
<td><font color="white">
<?php
$id=$_REQUEST['id'];
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$sql="SELECT * FROM products where pid=$id";
$result=mysql_query($sql,$con) or die(mysql_error());

while($row=mysql_fetch_array($result)) 
{
	if(isset($_SESSION['cid']))
	{
	$_SESSION['pid']=$row['pid'];
	}
echo "<font size='5' ><b><b><font color='yellow'>".$row['desc']."</font></b><br><img width='200' height='180' src='image/".$row['image']."' ><br><br> Model: <font color='yellow'>".$row['pname']."</font><br><br>Rs: <font color='yellow'>".$row['cost']."</font><br><br>Brand: <font color='yellow'>".$row['btype'];
}
//login checking

?>
<br>
<input id="b3" type="submit" value="Add to cart">
</td>
<br><br>
</tr>
</table>
</div>

<div style="float:left;margin-left:20px;width:600px;margin-top:10px;height:400px;font-size:20;color:yellow;">
 <?php
$id=$_REQUEST['id'];
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$sql="SELECT * FROM products where pid=$id";
$result=mysql_query($sql,$con) or die(mysql_error());

while($row=mysql_fetch_array($result)) 
{

//$_SESSION['pid']=$row['pid'];

echo "<b><font color='red'>SPECIFICATION</font></b><hr width='200' align='left'><br><font color='red'>Camera:  </font>".$row['cam']."<br><br><font color='red'>RAM:  </font>".$row['ram']."<br><br><font color='red'>OS:  </font>".$row['os']."<br><br><font color='red'>Version:  </font>".$row['version'];
}
//login checking

?>
</div>
<hr width="400">
<center>

 </form>
 
 </center>

 </body>
 
 
 </html>
 <?php
include "footer.php";
?>
 


