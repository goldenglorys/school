<?php 
require 'dbcon.php';
$id=$_GET['del'];
$delete=mysqli_query($con,"DELETE from student where student_id = '$id'");
header("location:change.php");

// if ($delete) {
// 	include 'edit.php';
// }
// else{
// 	echo mysqli_error($con);
// }



 ?>