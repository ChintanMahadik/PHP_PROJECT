<?php
include "header_admin.php";
?>

<html>
<head>
<title>LOGIN PAGE</title>
<link rel="stylesheet" href="reg.css">

</head>
<body id="back">


<form  id="frm1" action="admin_action.php" method="post" enctype="multipart/form-data">
<div style="width:800px;float:left;">
<table>
<caption><font color="Yellow" size="4"><b>ADMIN PANEL</b></caption>
<tr>
<td><font color="white" size="4">PRODUCT NAME </td><td>  <input type="text" id ="pname" name="pname"></td>
</tr></br>
<tr>
<td><br><font color="white" size="4">PRODUCT TYPE</td><td><select name="producttype">
<option value="null"></option>
<option value="mobile" id="mob" name="mob">MOBILE</option>

</select></br>
</td>
</tr>

<tr>
<td><br><font color="white" size="4">BRAND TYPE </td><td>  
<select name="brand">
 <option value="null"></option>
 <option value="SAMSUNG" name="SAMSUNG" id="SAMSUNG">SAMSUNG</option>
 <option value="NOKIA" name="NOKIA" id="NOKIA">NOKIA</option>
 <option value="SONY" name="SONY" id="SONY">SONY</option>
 <option value="MICROMAX" name="MICROMAX" id="MICROMAX">MICROMAX</option>
 
 </select>
 </td>
 </tr>
 <tr>
 <td><br><font color="white" size="4">UPLOAD IMAGE:</td><td>
  <font color="white" size="2">Filename:
<input type="" name="file_image" id="file"/><br/>

</td>
</tr>
<tr>
<td><br><font color="white" size="4">PRODUCT DESCRIPTION </td><td>  <textarea rows="3" cols="25" id ="desc" name="desc"></textarea></td>
</tr>
<tr><br>
<td><br><font color="white" size="4">PRODUCT SPECIFICATION</font></td>
<td>
<font color="white" size="2" >CAMERA
<select name="camera">
 <option value="null"></option>
 <option value="2MP" name="2MP" id="2MP">2MP</option>
 <option value="5MP" name="5MP" id="5MP">5MP</option>
 <option value="8MP" name="8MP" id="8MP">8MP</option>
 <option value="13MP" name="13MP" id="13MP">13MP</option>
  <option value="41MP" name="41MP" id="41MP">41MP</option>
</select>
 
<font color="white">RAM
<select name="ram">
 <option value="null"></option>
 <option value="512MB" name="512MB" id="512MB">512MB</option>
 <option value="1GB" name="1GB" id="1GB">1GB</option>
 <option value="2GB" name="2GB" id="2GB">2GB</option>

 </select>
 
 <font color="white">OS
<select name="os">
 <option value="null"></option>
 <option value="Android" name="Android" id="Android">Android</option>
 <option value="Windows" name="Windows" id="Windows">Windows</option>
 
 </select>
 
<font color="white"> VERSION
<select name="version">
 <option value="null"></option>
 <option value="Ice cream sandwich" name="Ice cream sandwich" id="Ice cream sandwich">Ice cream sandwich</option>
 <option value="Jellybean" name="Jellybean" id="Jellybean">Jellybean</option>
 <option value="Kitkat" name="Kitkat" id="Kitkat">Kitkat</option>
 <option value="Lollipop" name="Lollipop" id="Lollipop">Lollipop</option>
 <option value="Windows8.1" name="Windows8.1" id="Windows8.1">Windows8.1</option>
  <option value="Windows8" name="Windows8" id="Windows8">Windows8</option>
 </select>
 </td>
 </tr>
 
 
<tr>
<td><br><font color="white" size="4">COST  </td><td> <input type="text" id ="cost" name="cost"></td>
</tr></br>
<tr>
<td>
<br>
<input type="submit" name="submit" id="b1" id="submit" value="Add Product"/>

</td>
</tr>

</table>
</div>
<div style="float:left;margin-top:100px;">
 <img src="images/iphone.gif"></img>
</div>
</form>

</body>
</html>
<?php
include "footer.php";
?>
