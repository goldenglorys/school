<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Jss Result Table</title>

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

    table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
	}

	th, td {
    text-align: left;
    /*padding: 4px;*/
	}

    	tr:nth-child(even){background-color: dodgerblue;color: white}

    	.row{
    		    margin-top: 2em

    	}
      label
      {
        color: black
      }
     
    	
    </style>
</head>
<body>
	<div class="container">
		
			<div class="row">
				<div class="col-md-4">
					 <div class="logo">
                            <a href="#">
                                <img src="images/p.png" style="height: 60%;width: 100%; " alt="Admin">
                            </a>
                        </div>
				</div>

				<div class="col-md-8" style="">
			        <h1 style="color:dodgerblue;">Temple <span style="color: black">International Baptist</span> Academy</h1>
                <p>P.O BOX 1554,Papa Alapo Ogbomosho.</p>
                        	<h3 style="float: right;background-color: dodgerblue;margin-top: 2em;color: white;height: 2em;width: 40%">Student Result</h3>
				</div>
			</div>
      <form method="post" action="results.php">
                        <div class="container">
                          <label>Name of Student</label>
                          

                          <input type="text" value="<?php echo $_SESSION['name']?>" class="form-control" placeholder="Name of student">

                      <div class="row">
                        
                      </div>
                    </div>
         					 <?php
                              	
                                require 'dbcon.php';
                                $rid = $_SESSION['regid'];
                                $any = mysqli_query($con, "SELECT * from math where regnumber = '$rid'");
                                while($any1 = mysqli_fetch_array($any)){
                                	$test1 = $any1['test1'];
                                	$test2 = $any1['test2'];
                                	$test3 = $any1['test3'];
                                	$exam = $any1['exam'];
                                	$class = $any1['class'];
                                	$year = $any1['year'];
                                	$tchcmt = $any1['teachers_comment'];
                                }
                              ?>
                        	<div class="row">
                            <div class="col-md-6">
                              <label>Regnumber</label>
                          <input type="text" value="<?php echo $_SESSION['regid']?>" name="regid" class="form-control">
                          <label>YEAR</label>
                          <input type="text" name="year" value="<?php echo $year?>" class="form-control"placeholder="Year and Section">

                        </div>

                        <div class="col-md-6">
                          <label>CLASS</label>
                          <input type="text" name="class" value="<?php echo $class?>" class="form-control" placeholder="Class">

                        </div>
                        		<div class="col-md-6">
                        		<table>
                        			<tr>
                        				<th>Subject</th>
                        				<th>1ST C.A /10</th>
                        				<th>2ND C.A /10</th>
                        				<th>3RD C.A /10</th>
                        				<!-- <th>TOTAL C.A /30</th>
   -->                      				<th>TERM'S EXAM /70</th>
                        				<!-- <th>SUMMARY OF TERM'S WORK /100</th>
                        				<th>POSITION</th> -->
                        			</tr>
                        			<tr>
                        				<td>1. Mathematics</td>
                        			   	<td><input type="text" value="<?php echo $test1?>" name="tone" class="form-control" disabled></td>
                           				<td><input type="text"  value="<?php echo $test2?>" name="ttwo" class="form-control" disabled></td>
                          				<td><input type="text"  value="<?php echo $test3?>" name="tthree" class="form-control" disabled></td>
                          				<!-- <td><input type="text" name="mfour" class="form-control"></td> -->
                          				<td><input type="text" value="<?php echo $exam?>" name="exam" class="form-control" disabled></td>
                          				<!-- <td><input type="text" name="msix" class="form-control"></td>
                          				<td><input type="text" name="mseven" class="form-control"></td> -->
                        			</tr>

                        			<tr>
                        				<td>2. English</td>
                        				<td><input type="text" name="eone" class="form-control" disabled></td>
                           				<td><input type="text" name="etwo" class="form-control" disabled></td>
                          				<td><input type="text" name="ethree" class="form-control" disabled></td>
                          				<td><input type="text" name="efour" class="form-control" disabled></td>
                          				<td><input type="text" name="efive" class="form-control" disabled></td>
                          				<td><input type="text" name="esix" class="form-control" disabled></td>
                          				<td><input type="text" name="eseven" class="form-control" disabled></td>
                        			</tr>

                        			<tr>
                        				<td>3. Yoruba</td>
                        				<td><input type="text" name="yone" class="form-control" disabled></td>
                           				<td><input type="text" name="ytwo" class="form-control"disabled></td>
                          				<td><input type="text" name="ythree" class="form-control" disabled></td>
                          				<td><input type="text" name="yfour" class="form-control" disabled></td>
                          				<td><input type="text" name="yfive" class="form-control" disabled></td>
                          				<td><input type="text" name="ysix" class="form-control" disabled></td>
                          				<td><input type="text" name="yseven" class="form-control" disabled></td>
                        			</tr>

                        			<tr>
                        				<td>4. Computer Science</td>
                        				<td><input type="text" name="csone" class="form-control" disabled></td>
                           				<td><input type="text" name="cstwo" class="form-control" disabled></td>
                          				<td><input type="text" name="csthree" class="form-control" disabled></td>
                          				<td><input type="text" name="csfour" class="form-control" disabled></td>
                          				<td><input type="text" name="csfive" class="form-control" disabled></td>
                          				<td><input type="text" name="cssix" class="form-control" disabled></td>
                          				<td><input type="text" name="csseven" class="form-control" disabled></td>
                        			</tr>

                        			<tr>
                        				<td>5. Social Studies</td>
                        				<td><input type="text" name="ssone" class="form-control"></td>
                           				<td><input type="text" name="sstwo" class="form-control"></td>
                          				<td><input type="text" name="ssthree" class="form-control"></td>
                          				<td><input type="text" name="ssfour" class="form-control"></td>
                          				<td><input type="text" name="ssfive" class="form-control"></td>
                          				<td><input type="text" name="sssix" class="form-control"></td>
                          				<td><input type="text" name="ssseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>6. Agiculture</td>
                        				<td><input type="text" name="aone" class="form-control"></td>
                           				<td><input type="text" name="atwo" class="form-control"></td>
                          				<td><input type="text" name="athree" class="form-control"></td>
                          				<td><input type="text" name="afour" class="form-control"></td>
                          				<td><input type="text" name="afive" class="form-control"></td>
                          				<td><input type="text" name="asix" class="form-control"></td>
                          				<td><input type="text" name="aseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>7. Basic Science</td>
                        				<td><input type="text" name="bsone" class="form-control"></td>
                           				<td><input type="text" name="bstwo" class="form-control"></td>
                          				<td><input type="text" name="bsthree" class="form-control"></td>
                          				<td><input type="text" name="bsfour" class="form-control"></td>
                          				<td><input type="text" name="bsfive" class="form-control"></td>
                          				<td><input type="text" name="bssix" class="form-control"></td>
                          				<td><input type="text" name="bsseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>8. Creative Arts</td>
                        				<td><input type="text" name="caone" class="form-control"></td>
                           				<td><input type="text" name="catwo" class="form-control"></td>
                          				<td><input type="text" name="cathree" class="form-control"></td>
                          				<td><input type="text" name="cafour" class="form-control"></td>
                          				<td><input type="text" name="cafive" class="form-control"></td>
                          				<td><input type="text" name="casix" class="form-control"></td>
                          				<td><input type="text" name="caseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>9.Basic Technology</td>
                        				<td><input type="text" name="btone" class="form-control"></td>
                           				<td><input type="text" name="bttwo" class="form-control"></td>
                          				<td><input type="text" name="btthree" class="form-control"></td>
                          				<td><input type="text" name="btfour" class="form-control"></td>
                          				<td><input type="text" name="btfive" class="form-control"></td>
                          				<td><input type="text" name="btsix" class="form-control"></td>
                          				<td><input type="text" name="btseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>10. Business Studies</td>
                        				<td><input type="text" name="sbone" class="form-control"></td>
                           				<td><input type="text" name="sbtwo" class="form-control"></td>
                          				<td><input type="text" name="sbthree" class="form-control"></td>
                          				<td><input type="text" name="sbfour" class="form-control"></td>
                          				<td><input type="text" name="sbfive" class="form-control"></td>
                          				<td><input type="text" name="sbsix" class="form-control"></td>
                          				<td><input type="text" name="sbseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>11.French</td>
                        				<td><input type="text" name="fone" class="form-control"></td>
                           				<td><input type="text" name="ftwo" class="form-control"></td>
                          				<td><input type="text" name="fthree" class="form-control"></td>
                          				<td><input type="text" name="ffour" class="form-control"></td>
                          				<td><input type="text" name="ffive" class="form-control"></td>
                          				<td><input type="text" name="fsix" class="form-control"></td>
                          				<td><input type="text" name="fseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>12. Civic Education</td>
                        				<td><input type="text" name="ceone" class="form-control"></td>
                           				<td><input type="text" name="cetwo" class="form-control"></td>
                          				<td><input type="text" name="cethree" class="form-control"></td>
                          				<td><input type="text" name="cefour" class="form-control"></td>
                          				<td><input type="text" name="cefive" class="form-control"></td>
                          				<td><input type="text" name="cesix" class="form-control"></td>
                          				<td><input type="text" name="ceseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>13. Christain Religion Studies</td>
                        				<td><input type="text" name="crone" class="form-control"></td>
                           				<td><input type="text" name="crtwo" class="form-control"></td>
                          				<td><input type="text" name="crthree" class="form-control"></td>
                          				<td><input type="text" name="crfour" class="form-control"></td>
                          				<td><input type="text" name="crfive" class="form-control"></td>
                          				<td><input type="text" name="crsix" class="form-control"></td>
                          				<td><input type="text" name="crseven" class="form-control"></td>
                        			</tr>

                        			<tr>
                        				<td>14. Physical Health Education</td>
                        				<td><input type="text" name="phone" class="form-control"></td>
                           				<td><input type="text" name="phtwo" class="form-control"></td>
                          				<td><input type="text" name="phthree" class="form-control"></td>
                          				<td><input type="text" name="phfour" class="form-control"></td>
                          				<td><input type="text" name="phfive" class="form-control"></td>
                          				<td><input type="text" name="phsix" class="form-control"></td>
                          				<td><input type="text" name="phseven" class="form-control"></td>
                        			</tr>

                        		</table>
                            <h2>Teachers Report</h2><input type="text" disabled value="<?php echo $tchcmt?>"name="teacher" class="form-control">

                          </form>
                        		</div>
                        		</table>
                        	</div>
                        </div>

                        

                        	
                    </center>
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
