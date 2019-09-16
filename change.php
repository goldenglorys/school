<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>List of Students</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

<?php 
require 'dbcon.php';

session_start();
$fname=$_SESSION['fname'];
if (isset($fname))
 {

 	echo $fname;
 	$result=mysqli_query($con, "SELECT student_id,surname,fname,mname,email,gen,birth,nation,class,upload from student ORDER BY fname");
 	$row=mysqli_num_rows($result);
	echo "<div class='container'>";
	echo "<h3> </br>Welcome to Admin Panel</h3>";
	echo "Total Register users : ".$row;
	echo "<a href='stafflogout.php' <button class='btn btn-primary' style='float:right;margin-left:150px;'>Logout</button></a>";
	echo "</br></br>";
	echo "<table class ='table table-responsive table-striped table-bordered'";
	echo "<tr align='center'>";
	echo "<th>S.no</th>";
    echo "<th>Surname</th>";
	echo "<th>Firstname</th>";
	echo "<th>Middlename</th>";
	echo "<th>Email</th>";
	echo "<th>D O B</th>";
    echo "<th>Nationality</th>";
     echo "<th>Gender</th>";
    echo "<th>Class</th>";
	echo "<th>Profile</th>";
	echo "<th>Delete User</th>";
	echo "<th>Edit</th>";
	echo "</tr>";
	$i=0;
	while ($retrive=mysqli_fetch_array($result)) {

		$student_id=$retrive['student_id'];
        $surname=$retrive['surname'];
		$fname=$retrive['fname'];
		$mname=$retrive['mname'];
		$email=$retrive['email'];
		$birth=$retrive['birth'];
        $nation=$retrive['nation'];
        $gen=$retrive['gen'];
        $class=$retrive['class'];
		$upload=$retrive['upload'];
		echo "<tr align='center'>";
		echo "<th>".$i=$i+1;"</th>";
        echo "<th>$surname</th>";
		echo "<th>$fname</th>";
		echo "<th>$mname</th>";
		echo "<th>$email</th>";
		echo "<th>$birth</th>";
        echo "<th>$nation</th>";
        echo "<th>$gen</th>";
        echo "<th>$class</th>";
		echo "<th><img src='upload/$upload' height='100px' width='100px'></th>";
		echo "<th><a href='deletestudent.php?del=$student_id'> <button class='btn btn-danger'>Delete </button></a></th>";
		echo "<th><a href='admin.php?update=$student_id'> <button class='btn btn-success'>Edit</button></a></th>";
		echo "</tr>";

	}
	echo "</table>";
    echo "</div>";
}
else
{
	header("location:logstaff.php");	
}




 ?>

  <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
</body>
</html>