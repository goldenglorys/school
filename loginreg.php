
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

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
        <link rel="stylesheet" type="text/css" href="wowjs/css/libs/animate.css">

        <link rel="stylesheet" type="text/css" href="loginreg.css">


    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <script type="text/javascript" src="wowjs/wow.min.js"></script>


        <script>
        new WOW().init();
        </script>
</head>
<body>

      <center>
        <div class="container-fluid wow bounceIn" data-wow-duration="3s" style="margin-top: 50px">
            <form method="post" action="loginre.php">
              <div class="card">
                  <h1 style="color: white">STUDENT LOGIN</h1>
                  <hr style="  width: 100%; height: .2rem; background-color: white; margin: 0 auto;"><br>
                  
                          <?php 
                        session_start();
                       if( isset($_SESSION['error'])){ 
                        ?>

                        <div class="alert alert-danger" style="width: 100%">
                            <strong>Incorrect Email or Password</strong>
                        </div>
                        <?php
                        unset($_SESSION['error']);
                    }
                        ?>
                       <img src="images/p.png" style="width: 130px;border-radius: 80%">
                          <div  style="width: 100%;padding-top: 2em">
                            
                         <label for="email"><b>Email</b></label><br>
                            <input type="text" placeholder="Enter email" name="email" required class="form-control"><br>

                             <label for="password"><b>Password</b></label>
                                 <input type="password" placeholder="Input password" name="password" required class="form-control" maxlength="12"/><br>

                                     <input type="checkbox" name="" ><span style="color:white">Remember me </span>
                                         <a href="#">Forget Password</a><br><br>
                                         

                                        <button class="btn btn-primary" value="submit">SIGN IN</button>
                                             <a href="registration.php" class="btn btn-success">SIGN UP</a>        
                                    </div>
                                </div>
                             </form>
                         </div>
                      </center>




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
