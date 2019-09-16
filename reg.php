<?php
session_start();

require 'dbcon.php';
$surname = $_POST["surname"];
$fname = $_POST["fname"];
$mname =$_POST["mname"];
$gen = $_POST["gen"];
$birth =$_POST["birth"];
$kin = $_POST["kin"];
$religion = $_POST["religion"];
$class = $_POST["class"];
$email = $_POST["email"];
$knumber = $_POST["knumber"];
$digit = $_POST["digit"];
$mnumber = $_POST["mnumber"];
$numb = $_POST["numb"];
$address = $_POST["address"];
$nation = $_POST["nation"];
$state = $_POST["state"];
$password = $_POST["password"];
$pass = $_POST["pass"];

for($i=0; ;$i++){
	$regnumber = mt_rand(1,10000000000);
	if(strlen($regnumber) == 10){
		break;
	}
}
echo "This is your Registration number   $regnumber ";


$filetoupload = $_FILES["pix"]["name"];
$target_dir = "upload/";
$target_file = $target_dir . $filetoupload;
$filetouploadsize= $_FILES["pix"]["size"];
$filetouploadtype= $_FILES["pix"]["type"];
$tmp = $_FILES["pix"]["tmp_name"];

if ($password != $pass) {
	echo "password does not match";
	include 'registration.php';

}
else{
	$pixmove = move_uploaded_file($tmp, $target_file);

		$save = mysqli_query($con, "INSERT into student (surname, fname, mname, gen, birth, kin, religion, class, email, knumber, digit,numb,  mnumber, address, nation, state, password, regnumber, upload) VALUES ('$surname', '$fname', '$mname', '$gen','$birth', '$kin', '$religion', '$class', '$email', '$knumber', '$digit', '$numb', '$mnumber', '$address','$nation', '$state', '$password', '$regnumber', '$filetoupload')");

			echo mysqli_error($con);
			if ($save) {
				 $_SESSION['regnumber']=$regnumber;
				header("location:loginreg.php");
				}

			else{
				header("location:registration.php");
				}	
			}

?>