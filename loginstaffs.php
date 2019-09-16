<?php 
require 'dbcon.php';
session_start();

$fname = $_POST["fname"];
$password = $_POST["password"];

$save = mysqli_query($con, "SELECT * from staff where fname = '$fname' and password = '$password'");

echo mysqli_error($con);
$result= mysqli_num_rows($save);

if ($result > 0) {
	mysqli_fetch_assoc();
  	$_SESSION['fname']=$fname;
	header("location:change.php");
}
else{
	$_SESSION['error']=true;
  header("location:loginstaff.php");
	// $msg = "Wrong email or password";
}

 ?>