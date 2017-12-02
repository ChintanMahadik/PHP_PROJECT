<?php

include "header.php";

?>


<html>
<head>
<script type="javascript">
function chk_valid()
{
	var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
	var email=document.getElementById("email").value;
	var cn=document.getElementById("cno").value;
    var country=document.getElementById("country").value;
    var pincode=document.getElementById("pcode").value;
	var address=document.getElementById("address").value;

	var flag=0;

	if(fname == "")
	{
		var msg="please enter first name";
		document.getElementById("err_fname").innerHTML=msg; // inject error message into specified element
		flag++;
		alert("enter valid name");
	}
	else
	{
		document.getElementById("err_fname").innerHTML="";
	}
        if(lname == "")
	{
		var msg="please enter last name";
		document.getElementById("err_lname").innerHTML=msg; // inject error message into specified element
		flag++;
	}
	else
	{
		document.getElementById("err_lname").innerHTML="";
	}
        if(user == "")
	{
		var msg="please enter user name";
		document.getElementById("err_user").innerHTML=msg; // inject error message into specified element
		flag++;
	}
	else
	{
		document.getElementById("err_user").innerHTML="";
	}
        
        if( password == "")
	{
		var msg="please enter password";
		document.getElementById("err_password").innerHTML=msg;
		flag++;
	}
	else
	{

		// at least one number, one lowercase and one uppercase letter 
                // at least six characters
		var reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
		if(reg.test(password) == false)
		{
			var msg="enter valid password";
			document.getElementById("err_password").innerHTML=msg;
			flag++;
		}
		else
		{
			document.getElementById("err_password").innerHTML="";
		}
	}
        
	if(email == "")
	{
		var msg="please enter email";
		document.getElementById("err_mail").innerHTML=msg;
		flag++;
	}
	else
	{
                ///^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/i;
		// following pattern specifies the rules for email
		// /^[a-z0-9._-]+@[a-z]+.[a-z.]{2,5}$/i
		// works: ^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,5})$/

		var reg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?:[A-Z]{2}|com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)\b/
                        
		if(reg.test(email) == false)
		{
			var msg="please enter valid email";
			document.getElementById("err_mail").innerHTML=msg;
			flag++;
		}
		else
		{
			document.getElementById("err_mail").innerHTML="";
		}
	}
	if(cn == "")
	{
		var msg="please enter contact no.";
		document.getElementById("err_cn").innerHTML=msg;
		flag++;
	}
	else
	{
		var reg=/^([0-9]{7,12})$/;
		if(reg.test(cn) == false)
		{
			var msg="insert valid contact no.";
			document.getElementById("err_cn").innerHTML=msg;
			flag++;
		}
		else
		{
			document.getElementById("err_cn").innerHTML="";
		}
	}

	// If any error remain in the form during submission then variable flag remain greater than 0, Form is not submitted if flag is greater than 0.
	if(flag > 0)
	{
		return false;
	}
	else
	{
		return true;
	}
}

function chk_pin(e)
{
	// The which property specifies which key or button was pressed for the event.
	// only accepts 0-9, backspace and tab keys
	if(e.which >=48 && e.which <=57 || e.which == 8 || e.which == 9)
	{
		return true;
	}
	else
	{
		return false;
	}
} 
</script>
<title>
REGISTRATION
</title>
<link rel="stylesheet" href="reg.css">

</head>
<body id="back">
<center>


</center>

<form id="frm1" action="adduser.php" method="post">
<div style="width:400px;float:left;">
<table>
<caption><font color="Yellow"><h3>PAYMENT</h3></caption>
<tr>
<td><font color="white">Payment Type:</td>
<td> 

<select name="paytype">
 <option value="null"></option>
 <option value="cod" name="cod" id="cod">Cash on delivery</option>
 <option value="cre" name="cod" id="cre">Credit</option>
 <option value="deb" name="cod" id="deb">Debit</option>
 </select>
</td>
<br>
</tr>
<tr>
<td>
<font color="white">Delivery Charge: Rs 50</td>
<br>
</tr>
<tr>
<td>Cost of Product: </td>
<td>
<?php

$id=$_REQUEST['id'];
$con=mysql_connect('localhost','root'.'');
mysql_select_db('cart',$con);
$sql="SELECT cost FROM products where pid=$id";
$result=mysql_query($sql,$con) or die(mysql_error());

while($row=mysql_fetch_array($result)) 
{
echo "</font><br><br>Rs: <font color='yellow'>".$row['cost'];
}
//login checking


?>
</td>
</tr>
<td><input type="submit" onclick="return chk_valid();" value="Confirm" id="b1"></td> <td><input type="reset" id="b2"></td>
</tr>
</table>
</div>
<div style="float:left;margin-left:200px;margin-top:100px;">
 <img src="images/iphone.gif" height="300" width="300"></img>
</div>
<hr width="400">
<center><font size="4" >Are you a registered member?
if Yes <a id="anchor" href="login.php" ><font color="red"><b>Login</b></font></a>
 </form>
 
 </center>

 </body>
 
 
 </html>
 <?php
include "footer.php";
?>
 
 
 