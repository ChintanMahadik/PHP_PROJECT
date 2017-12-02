<?php
if(file_exists("upload/".$_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"]."already exists";
}
else
{
move_uplaoded_file($_FILES["file"]["tmp_name"],"upload/".$FILES["file"]["name"]);
echo "stored in :"."upload/".$_FILES["file"]["name"];
}
?>