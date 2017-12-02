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
<caption><font color="Yellow"><h3>REGISTRATION FORM</h3></caption>
<tr>
<td><font color="white">First Name:</td><td> <input style="border-radius:5px" class="textbox" type="text" name="fname" id="fname"><span id="err_fname"></span></td>
<br>
</tr>
<tr>
<td>
<font color="white">Last Name:</td><td><input style="border-radius:5px" class="textbox" type="text" name="lname" id="lname"></td>
<br>
</tr>


<tr>
<td><font color="white">Contact no.:</td><td><input style="border-radius:5px" class="textbox" type="text" name="cno" id="cno"></td>
</tr>

<tr>
<td><font color="white">Username:</td><td><input style="border-radius:5px" class="textbox" type="text" name="username" id="email"></td>
</tr>
<tr>
<td><font color="white">Password:</td><td> <input style="border-radius:5px" class="textbox" type="password" name="password" id="password"><span id="err_fname"></span></td>
<br>
</tr>
<tr>
<td><font color="white">Email:</td><td> <input style="border-radius:5px" class="textbox" type="text" name="email" id="email"><span id="err_email"></span></td>
<br>
</tr>
<tr>
<td><font color="white">Country:</td><td> <select style="border-radius:5px" class="textbox" name="country" id="country" />

	<option value="null"></option> 
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon" >Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Span">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select></td>
</tr>


<tr>
<td><font color="white">Pincode:</td><td><input style="border-radius:5px" class="textbox" type="text" name="pcode" id="pcode"/></td>
</tr>
<tr>
<td><font color="white">Address:</td><td><textarea style="border-radius:5px" rows="3" cols="5" class="textbox" name="address"></textarea></td>
</tr>
<tr>
<td><input type="submit" onclick="return chk_valid();" value="Register" id="b1"></td> <td><input type="reset" id="b2"></td>
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
 
 
 