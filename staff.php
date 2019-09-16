<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Staff</title>

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
      color: black
    }
    	.card{
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
      width: 80%;
      border-radius: 1em;
      border-left: thin;
     }

     #bem {
          background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("images/36.jpg");
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
        }

       .text-over-img{
        text-align: center;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        }

        .form-control{
          border-radius: 2em
        }
        .logo{
          background: transparent;
        }
    </style>
</head>
<body>
		
		<center >

		<form method="post" action="staffreg.php" enctype="multipart/form-data">
			<div class="card container-fluid">
              <h1 style="color: dodgerblue">Registration<span style="color: black"> page for</span> Staff</h1>

				 <div class="row" style="margin-top: 2em">
				  <div class="col-md-6">
                    <div class="card-text" id="bem">
                       <div class="logo" style="padding-right: 24em; padding-top:1em ">
                            <a href="#">
                                <img src="images/p.png" style="height: 6em;width: 10em;" alt="Admin">
                            </a>
                        </div>
                           <h1 style="color:white;margin-top: 5em">Temple <span style="color: dodgerblue">International Baptist</span> Academy</h1>
                               <p class="text-over-img" style="color: white;margin-top: 13em">
                                 Be a staff by filling tne following form n with your correct informtion or details
                               </p>    
                    </div>              
                </div>

				 	<div class="col-md-6">
            <label for="name"><b>Surname</b></label><br>
              <input type="text" placeholder="Surname" name="surname" required class="form-control">


            <label for="name"><b>Firstname</b></label>
              <input type="text" placeholder="Firstname" name="fname" required class="form-control">


              <label for="name"><b>Middlename</b></label>
              <input type="text" placeholder="Middlename" name="mname" required class="form-control">

               <label><b>Place of Birth</b></label>
              <input type="text" placeholder="Birth Place"  name="place" class="form-control">

              <label for="birth"><b>D O B</b></label><br>
              <input type="date" placeholder="Date of birth" name="birth" required class="form-control">
              
              <label for="Gender"><b>Gender</b></label><br>
              <input type="radio" name="gen" id="ml" value="Male"> <b>Male</b> <input type="radio" name="gen" id="mo" value="Female"> <b>Female</b><br><br>


              <label for=""><b>Marital status</b></label><br>
              <select class="form-control" name="status" required>
                <option>Choose marital status</option> 
                <option>Married</option>   
                <option>Single</option>
                <option>Divoice</option>
              </select>


              <label for="religion"><b>Religion</b></label><br>
              <select class="form-control" name="religion" required>
                <option>Choose your Religion</option>
                <option>Christain</option>
                <option>Muslim</option>
              </select><br>

              <label><b>Qualification</b></label>
              <input type="text" name="qualify" class="form-control" placeholder="Qualification" required >

              <label><b>Subject Qualified to Teach</b></label>
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>

             
              <label><b>Nationality</b></label>
              <input type="text" name="nation" placeholder="Nationality" class="form-control" required>


               <label for="state"><b>State</b></label>
              <input type="text" placeholder="Input your state" name="state" required class="form-control"><br>



              <input type="file" name="pix" / required><br><br>


              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required class="form-control" >


      				<label for="address"><b>Home Address</b></label>
      				<input type="text" placeholder="Home Address" name="address" required class="form-control">

      				<label for="Phone"><b>Phone Number</b></label>
      				<input type="text" placeholder="Your Phone Number" name="numb" required class="form-control">

              <label for="password"><b>Create Password</b></label>
              <input type="password" placeholder="Password" name="password" required class="form-control ">

              <label for="password"><b>Confirm Password</b></label>
              <input type="password" placeholder="Password" name="pass" required class="form-control"><br>


             <input class="btn btn-primary btn-sm" type="submit" />


				 	</div>
				 	
				 </div>
			</div>
		</form>

		</center>
	

    


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
</body>
</html>