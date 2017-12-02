<?php
include "header.php";
?>



<html>
<head>
<title>
REGISTRATION
</title>
<link rel="stylesheet" href="home.css">
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
<td><br><br><font color="white">
<center><img src="image/sam_logo.png" width="400" height="150"></img><br><hr color="black"></hr></center>
<?php
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$sql="SELECT * FROM products where btype = 'SAMSUNG'";
$result=mysql_query($sql,$con) or die(mysql_error());

while($row=mysql_fetch_array($result))
{
 
 echo "<img id='i' src='image/".$row['image']."' >";

 echo "<a href='desc.php?id=".$row['pid']."'><font color='black' size='4'>".$row['pname']."</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
 
}

?>
<hr>
<center><img src="image/lum_logo.png" width="400" height="150"></img><br><hr color="black"></hr></center>

<?php
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$sql="SELECT * FROM products where btype = 'NOKIA'";
$result=mysql_query($sql,$con) or die(mysql_error());

while($row=mysql_fetch_array($result))
{
 
 echo "<img id='i' src='image/".$row['image']."' >";

 echo "<a href='desc.php?id=".$row['pid']."'><font color='black' size='4'>".$row['pname']."</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
 
}

?>
<br>
<hr>
<center><img src="image/x_logo.jpg" width="400" height="150"></img><br><hr color="black"></hr></center>

<?php
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$sql="SELECT * FROM products where btype = 'SONY'";
$result=mysql_query($sql,$con) or die(mysql_error());

while($row=mysql_fetch_array($result))
{
 
 echo "<img id='i' src='image/".$row['image']."' >";

 echo "<a href='desc.php?id=".$row['pid']."'><font color='black' size='4'>".$row['pname']."</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
 
}

?>
<br>
<hr>
<center><img src="image/micro_logo.jpg" width="400" height="150"></img><br><hr color="black"></hr></center>

<?php
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$sql="SELECT * FROM products where btype = 'MICROMAX'";
$result=mysql_query($sql,$con) or die(mysql_error());

while($row=mysql_fetch_array($result))
{
 
 echo "<img id='i' src='image/".$row['image']."' >";

 echo "<a href='desc.php?id=".$row['pid']."'><font color='black' size='4'>".$row['pname']."</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
 
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


