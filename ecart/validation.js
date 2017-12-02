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