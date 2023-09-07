<?php
//upload.php
if($_FILES["file"]["name"] != '')
{
 $test = explode('.', $_FILES["file"]["name"]);
 $ext = end($test);
 $name = rand(1000000000, 9999999999) . '.' . $ext;
 $location = './uploads/' . $name;  
 move_uploaded_file($_FILES["file"]["tmp_name"], $location);
 echo '<img id="link_img_3am" alt="https://www.chat-edman.com/chat2/chat'.$location.'" src="'.$location.'" style="width: 113px;height: 56px;" /><input type="button" id="Seeendd" value="send" onclick="Seeenddimg();" style="position:absolute;left: 14px;width: 90px;top: 60px;">';
}

?>