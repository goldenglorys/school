<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Student Register</title>

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
    <style type="text/css">
    body{
     
    }
    	.card{
      box-shadow: 0 7px 8px 0 rgba(0, 0, 0, 0.2);
      width: 75%;
      border-radius: 7px;
      margin-top: 1em;
      padding-bottom: 3em;
      background-color: #F7F7F7;
      background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),url(images/23.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
     }
     .form-control{
      border-radius: 0.5em;
     }
     label{
      color: white;
      text-shadow: 2px 2px 4px #000000 ! important;
      font-size: 1.1em
     }
     #as{
      color: white;
      width: 40%
      border-radius: 7px;
     }
     h1{
       color: white;
    text-shadow: 2px 2px 4px #000000 ! important;
     }

    </style>
</head>
<body>
		
		<!-- <center > -->
			
		<form method="post" action="reg.php" enctype="multipart/form-data">
      <div class="card container-fluid">
        <h1 class="card-header" style="text-align: center;text-transform: uppercase;letter-spacing: 0.3em">Registration page for Student</h1>
         <hr style="  width: 100%; height: .2rem; background-color: white; margin: 0 auto;"><br>
			      <div class="card-body">
               <div class="row">
                    <div class="col-md-6">
                            
                      <label for="name">Surname</label><br>
                      <input type="text" placeholder="Surname" name="surname" required class="form-control" maxlength="10"/><br>

                       <label for="name">Middlename</label>
                      <input type="text" placeholder="Middlename" name="mname" required class="form-control" maxlength="12"/><br>


                      <label for="birth">D O B</label><br>
                      <input type="date" placeholder="Date of birth" name="birth" required class="form-control"><br>


                        <label for="religion">Religion</label>
                        <select class="form-control" name="religion">
                          <option>Choose your Religion</option>
                          <option>Christain</option>
                          <option>Muslim</option>
                        </select><br>

                         <input type="file" name="pix" / required style="color: white"><br>

                           <label for="email">Email</label>
                           <input type="email" placeholder="Enter Email" name="email" required class="form-control" maxlength="20" /><br>


                          <label for="name">Father's Number</label>
                          <input type="text" placeholder="Father's Number" name="digit" required class="form-control" maxlength="10"/><br>


                          <label for="Phone">Phone Number</label>
                            <input type="text" placeholder="Your Phone Number" name="numb" required class="form-control" maxlength="11" /><br>

                          <label for="state">State</label>
                            <input type="text" placeholder="Input your state" name="state" required class="form-control" maxlength="10" /><br>

                            <label for="password">Create Password</label>
                            <input type="password" placeholder="Password" name="password" required class="form-control" maxlength="6" / id="1st password"><br>
                    </div>



                    <div class="col-md-6">

                     <label for="name">Firstname</label>
                      <input type="text" placeholder="Firstname" name="fname" required class="form-control" maxlength="10"/><br>

                      <center>
                      <label for="Gender">Gender</label><br>
                      <input type="radio" name="gen" id="ml" value="Male"><span style="color: white">Male</span> <input type="radio" name="gen" id="mo" value="Female"> <span style="color: white">Female</span><br><br><br>
                    </center>

                      <label for="name">Next of Kin</label>
                      <input type="text" placeholder="Next of Kin" name="kin" required class="form-control" maxlength="10"/><br>


                      <label for="class">Class</label>
                      <select class="form-control" name="class">
                        <option>Select Your Class</option>
                        <option value="Jss 1">Jss 1</option>
                        <option value="Jss 2">Jss 2</option>
                        <option value="Jss 3">Jss 3</option>
                        <option value="Sss 1">Sss 1</option>
                        <option value="Sss 2">Sss 2</option>
                        <option value="Sss 3">Sss 3</option>
                      </select><br>


                         <label for="number">Next kin Number</label>
                          <input type="text" placeholder="Next of kin Number" name="knumber" required class="form-control" maxlength="10"/><br>

                          <label for="number">Mother's Number</label>
                            <input type="text" placeholder="Mothername Number" name="mnumber" required class="form-control" maxlength="11"/><br>

                            <label for="address">Home Address</label>
                             <input type="text" placeholder="Home Address" name="address" required class="form-control" maxlength="15"/><br>

                             <label for="address">Nationality</label>
                             <input type="text" placeholder="Nationality" name="nation" required class="form-control" maxlength="15"/><br>


                            <label for="password">Confirm Password</label>
                            <input type="password" placeholder="Password" name="pass" required class="form-control" maxlength="6" / id="confirmPassword"><br>
                    </div>
                          
                                  <input class="btn btn-primary btn-lg" type="submit" style="margin-left: 18em">
                              


				 	  </div>
				 	</div>
		</form>

		
	




<!-- Jquery JS-->
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

    <script type="text/javascript">
      $(document).ready(function () {
        $("#ss").click(function(){
          $("option").show();
        });
      });
    </script>
</body>
</html>