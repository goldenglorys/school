<?php
require 'dbcon.php';

$filetoupload = $_FILES["pix"]["name"];
$target_dir = "upload/";
$target_file = $target_dir . $filetoupload;
$filetouploadsize= $_FILES["pix"]["size"];
$filetouploadtype= $_FILES["pix"]["type"];
$tmp = $_FILES["pix"]["tmp_name"];

if (move_uploaded_file($tmp, $target_file)) {
    echo "The file ". $filetoupload. " has been uploaded.";
}
?>