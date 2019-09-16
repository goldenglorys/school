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

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <style type="text/css">
        
        body {
    font-family: 'Montserrat', sans-serif;
    text-rendering : optimizeLegibility;
    -webkit-font-smoothing : antialiased;
}


#login-bg.container-fluid {
    padding: 0;
    height: 100%;
    position: absolute;
}

/* Background image an color divs*/

.bg-img , .bg-color {
    min-width: 50%;
    vertical-align: top;
    padding: 0;
    margin-left: 0;
    height: 100%;
    background-color: #CAF0D3;
    display: inline-block;
    overflow: hidden;
}

.bg-color {
    margin-left: -5px;
}

.bg-img {
    background-image: url(images/30.jpg);
    background-size: cover;
}

#login{
    padding-top: 10%;
    text-align: center;
    text-transform: uppercase;
}


.login {
    width: 100%;
    height: 500px;
    background-color: #fff;
    padding: 15px;
    padding-top: 30px;
}

.login h1 {
    margin-top: 30px;
    font-weight: bold;
    font-size: 60px;
    letter-spacing: 3px;
}

.login form {
    max-width: 420px;
    margin: 30px auto;
}

.login .btn {
    border-radius: 50px;
    text-transform: uppercase;
    font-weight: bold;
    letter-spacing: 2px;
    font-size: 20px;
    padding: 14px;
    background-color: #00B72E;
}

.form-group input {
    font-size: 20px;
    font-weight: lighter;
    border: none;
    background-color: #F0F0F0;
    color: #465347!important;
    padding: 26px 30px;
    border-radius: 50px;
    transition : 0.2s;
}




/* Form check styles*/

.form-check {
    padding: 0;
    text-align: left;
}

.form-check label {
    vertical-align: top;
    padding-top: 5px;
    padding-left: 5px;
    font-size: 15px;
    color: #606060;
    font-size: 14px;
}

.forgot-password {
    text-align: right;
    float: right;
    font-weight: bold;
}

.forgot-password a {
    color: #00B72E;
    opacity: 0.6;
}

.forgot-password a:hover {
    opacity: 1;
}


/* Switch styles */

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 30px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #F0F0F0;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 30px;
}

.slider:before {
  position: absolute;
  content: "";
  height: 22px;
  width: 22px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
  border-radius: 50%;
}

input:checked + .slider {
  background-color: #00B72E;
}

input:focus + .slider {
  box-shadow: 0 0 1px ##00B72E;
}

input:checked + .slider:before {
  -webkit-transform: translateX(30px);
  -ms-transform: translateX(30px);
  transform: translateX(30px);
}



/* Media queries */

@media(max-width: 500px) {
    .bg-img , .bg-color {
    min-width: 100%;
    height: 50%;
    margin: 0;
    }

    .forgot-password {
    text-align: right;
    float: left;
    padding: 20px 0;
    }


    #login {
        padding-top: 50px;
    }

}
    </style>
</head>
<body>
    



<div id="login-bg" class="container-fluid">
<div class="bg-img"></div>
<div class="bg-color"></div>
</div>

<div class="container" id="login">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="login">
<h1>Login</h1>

<form>
<div class="form-group">
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
</div>
<div class="form-group">
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>
<div class="form-check">
<label class="switch">
<input type="checkbox">
<span class="slider round"></span>
</label>
<label class="form-check-label" for="exampleCheck1">Remember me</label>
<label class="forgot-password"><a href="#">Forgot Password?<a></label>
</div>
<br>
<button type="submit" class="btn btn-lg btn-block btn-success">Sign in</button>
</form>








</div>
</div>
</div>
</div>















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