<?php
//upload.php
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(1000000000, 9999999999) . '.' . $ext;
 $location = './uploads/' . $name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 echo '<img id="link_img" alt="https://www.chat-edman.com/chat2/chat'.$location.'" src="'.$location.'" style="width: 40px;height: 40px;" />';
}

?>