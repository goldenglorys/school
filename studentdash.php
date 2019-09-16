<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Student Dashboard</title>

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


    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
        <script type="text/javascript" src="wowjs/wow.min.js"></script>
         <script>
        new WOW().init();
      </script>

    <style>
          body {
              font-family: "Lato", sans-serif;
          }

          .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
          }

          .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 25px;
              color: white;
              display: block;
              transition: 0.3s;
          }

          .sidenav a:hover {
              color: orange;
          }

          .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
          }

          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }
          h1{
            color: white
          }
          .card{
            background-image: url(images/im.jpeg);
          }
          i{
            float: right;
            color: transparent;
          }
          h2{
            color: dodgerblue;
          }


          .content {
             /*position: fixed;*/
    /*bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;*/
          }
          /*.container-fluid{
            width: 99%
          }*/
    </style>
</head>
<body>

  <?php 
  require 'dbcon.php';
  session_start();
  $email=$_SESSION['email'];
   ?>


	<div id="mySidenav" class="sidenav bg-info">
        <h5>
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div style="border-radius: 3em">
                   
              </div>
              <a href="#">Calendar of Activities</a>
              <hr style="color: white">
             <a href="studenttech.php">View Staff</a>
               <hr style="color: white">
             <a href="#">Edit</a>
               <hr style="color: white">
              <a href="#">Settings</a>
               <hr style="color: white">
              <a href="check.php">Check result</a>
               <hr style="color: white">
              <a href="#">Calendar</a>
               <hr style="color: white">

        </h5>

</div>
    
        <div id="main">
                       <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

          <div class="container-fluid">
            <div class="container-fluid" style="margin-top: -3em;">            
                    
                <nav class="navbar navbar-expand-lg navbar-dark bg-info static-top">
                  <div class="container">
                    <a class="navbar-brand" href="#">
                           <img src="images/p.png" style="width: 130px;border-radius: 80%;height: 50%">
                        </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                              </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Contact</a>
                        </li>
                      </ul>

                         <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                           
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <?php  echo  "<img src='upload/".$_SESSION['upload']."'>" ?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <?php echo $email?>


                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="out.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                  </div>
                </nav>
              </div>
 
              <div class="container-fluid wow bounceIn" style="margin-top: 1em;color: white">
                <div class="row">

                    <div class="col-md-4">
                      <div class="card" style="background-color:orange ;">
                         <div class="card-body">
                           <h1 class="count">30</h1> <i class="fa fa-users fa-4x" style="color: white"></i>
                             <h2 class="card-title">Staffs</h2>
                         </div>
                       </div> 
                    </div>

                    <div class="col-md-4">
                      <div class="card" style="background-color:green ;">
                         <div class="card-body">
                           <h1 class="count">350</h1> <i class="fa fa-users fa-4x" style="color: white"></i>
                             <h2 class="card-title">Students</h2>
                         </div>
                       </div> 
                    </div>

                    <div class="col-md-4">
                      <div class="card" style="background-color:#b2b2b2 ;">
                         <div class="card-body">
                           <h1 class="count">853</h1> <i class="fa fa-graduation-cap fa-4x" style="color: white"></i>
                             <h2 class="card-title">Graduates</h2>
                         </div>
                       </div> 
                    </div>
                </div>
              </div>

              <div class="container-fluid" >
                <video autoplay muted loop id="myVideo" style="width: 100%">
                <source src="images/save.webm" type="video/mp4">
              </video>
              <div class="carousel-caption">
                <p  style="">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud .
                    </p>
              </div>
          </div>
              
              <div class="c">
                
              </div>
              


              <div>
                ikdnkndsnlk
              </div>








        </div>
      </div>
            
        
            
	










</body>
</html>
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

    <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>

<script type="text/javascript">
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>