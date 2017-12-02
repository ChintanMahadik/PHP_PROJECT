<?php
?>
<html>
<head>
</head>
<body>
<style type="text/css">
.d1{
  border:1px solid black;
border-radius:20px;
-moz-border-radius:20px;
padding:10px;
width:1175px;
margin-left:75px;
background-color:#f1f1f1c;
}
#i1{
background-image:url("images/header5.jpg");
height:120px;
width:1200px;
margin-left:75px;
border-top-left-radius:50px;
border-top-right-radius:50px;
text-align:center;
font-family:"lucida calligraphy";
}

#menu{
background-image:url("images/header6.jpg");
height:50px;
width:1200px;
margin-left:75px;

text-align:center;

}
#men{
	margin-top:15px;
}
	</style>
	
<div id="i1"><b><i><font size="12">SHOPPING CART</font></i></b> </div>
<div id="menu">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<a id="men" href="admin_index.php"><font color="white" size="4" >HOME</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp



<?php
session_start();

if(isset($_SESSION['cid']))
{
echo "<a id='men' href='logout.php'><font color='white' size='4' >LOGOUT</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
}
else
{
echo "<a id='men' href='login.php'><font color='white' size='4' >LOGIN</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
}
?>




</div>
</body>
</html>