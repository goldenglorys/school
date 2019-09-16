<?php 
require 'dbcon.php';
session_start();

		$email = $_POST["email"];
		$password = $_POST["password"];

		$save= mysqli_query($con, "SELECT * FROM student WHERE email='$email' AND password='$password'");

		// echo mysqli_error($con);
		$result=mysqli_num_rows($save);

		if ($result > 0) {
		  $k = mysqli_fetch_assoc($save);

		  $_SESSION['upload'] = $k['upload'];

		  $_SESSION['email']=$k['email'];

		  $_SESSION['regid']=$k['regnumber'];

		  $_SESSION['name']=$k['surname']." ".$k['fname'];
		  
		  header("location:studentdash.php");
			
		}
		else
		{
			$_SESSION["error"]=true;
		   header("location:loginreg.php");		
	}
 ?>

