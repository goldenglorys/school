<?php 
session_start();

require 'dbcon.php';
//$upload=" ";
//$save = mysqli_query($con, "SELECT from school_tb where upload='$upload'");
$id = $_SESSION['num'];
echo "$id";
// $save = mysqli_query($con, "SELECT upload FROM school_tb ");
// print_r($save);
$log=true;
while ($r=mysqli_fetch_array($save)) {
		$_SESSION['num']=$r['upload'];

	$log=false;
}

echo $_SESSION['num'];

	

 ?>