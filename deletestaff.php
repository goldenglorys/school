<?php 
require 'dbcon.php';
$id=$_GET['del'];
$del=mysqli_query($con,"DELETE  from  staff where staff_id= '$id'");
header("location:staffinfo.php");





 ?>