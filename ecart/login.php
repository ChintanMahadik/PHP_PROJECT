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
<form id="frm1" action="checklogin.php" method="post">
<div style="width:400px;float:left;height:500px;">
<table>
<caption><font color="Yellow" size="4">LOGIN </caption>
<tr>
<td><br><br><font color="white">Username:</td><td><br><br> <input style="border-radius:5px;" id="textbox" type="text" name="username" placeholder="eg:example" id="fname"></input></td>
<br><br>
</tr>

<tr>

<td><br><br>
<font color="white">Password:</td><td><br><br><input style="border-radius:5px;" id="textbox" type="password" name="password" placeholder="eg:example@4356" id="lname"></td>
<br><br>
</tr>

<tr>
<td><br><br><br><br><br><input style="width:100px;" type="submit" id="b1" value="Login"></td>
</tr>
</table>

</div>
<div style="float:left;margin-left:200px;margin-top:100px;">
 <img src="images/iphone.gif"height="300" width="300" ></img>
</div>
<hr width="400">
<center><font size="4" >Are you are not a  registered member?
if Yes <a id="anchor" href="register.php" ><font color="red"><b>Register</b></font></a>
 </form>
 </center>
 
 </body>
 </html>
 <?php
include "footer.php";
?>