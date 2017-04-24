<!-- Ngoma - Team Project

	 Group members: Benedicta Amo Bempah, Tito Magero, Veronicah Nanjala, Loltolo Petro Lesapiti

	 Web Technologies 

	 Task 3.1 - Web Tech: Employee Page

-->

<?php 
session_start();
if (!isset($_SESSION['username'])) {
  header("location:../index.php")
}?>

<!doctype html>

<html lang="en">



<head>

<meta charset="utf-8">

<title> Ngoma Employee </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="African Music Reserve" />

<meta name="author" content="Ngoma Project" />



<!-- styles -->

<link rel="stylesheet" href="../assets/css/fancybox/jquery.fancybox.css">

<link href="../assets/css/bootstrap.css" rel="stylesheet" />

<link href="../assets/css/bootstrap-theme.css" rel="stylesheet" />

<link rel="stylesheet" href="../assets/css/slippry.css">

<link href="../assets/css/style.css" rel="stylesheet" />

<link rel="stylesheet" href="../assets/color/default.css">

<link rel="stylesheet" href="../assets/css/styleSignup.css">

<link rel="stylesheet" href="../assets/css/landing.css">



<!-- ==========================================================================

    Details of theme employed for the front end of the project is as follows: 

    Theme Name: Groovin

    Theme URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/

    Author: BootstrapMade

    Author URL: https://bootstrapmade.com

================================================================================ -->

<script src="assets/js/modernizr.custom.js"></script>



</head>



			<!-- Body Section begins here -->

<body>

<header>

<div id="navigation" class="navbar navbar-inverse navbar-fixed-top default" role="navigation">

  <div class="container">



    <!--  Header view - navigation bar

          Brand and toggle get grouped for better mobile display -->



    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="employeePage.php"> Ngoma </a>


    </div>
	  <div class="navigation">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>

    <ul class="nav navbar-nav navbar-right">
    <li class="current"><a href="../pages/addemployee.php"> Add employee </a></li>
    <li class="current"><a href="../pages/addAdmin.php"> Add admin </a></li>
    <li class="current"><a href="../layout/employeePage.php"> Home </a></li>
    <li class="current"><a href="../login/logout.php"> Logout </a></li>
    <li><a href="listenerSignUp.php">  </a></li>
    <li><a href="artistSignUp.html"> </a></li>
    <li><a href="Login.html"> </a></li>
      </ul></nav>
    </div> <!-- /.navbar-collapse -->
  </div>



  </div>

</div>



</header>

<body>

	            <!-- Form for data entry begins-->
<div style = "margin-top:100px; ">

<form class="form-horizontal" style="background-color: #4e3f3e;width: 60%;margin:auto;color: white; margin-top: 10%;margin-bottom:10% " name="artForm" action="" method="post" onSubmit ="validateEntries()" align="center">
  <div style="text-align:center">

  <?php 

  require_once('../controller/employeemanagementController.php');
  $viewEmployees=new EmplyeeManagement;
  $viewEmployees->loadinfo();
  ?> 
</form>
<br><br>
</div>



</body>





        

<!-- end section contact -->

<footer>

<div class="verybottom">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<div class="aligncenter">

				<h1 style="color:white">

					Employee Management! <br>

				</h1>

                <ul class="social-network social-circle">

                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>

                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>

                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>

                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>

                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>

                </ul>	

				</div>				

			</div>

		</div>

		<div class="row">

			<div class="col-md-12">

				<div class="aligncenter">

					<p>

						 &copy; Ngoma Music - All right reserved

					</p>

                    <div class="credits">

                        <!-- 

                            All the links in the footer should remain intact. 

                            You can delete the links only if you purchased the pro version.

                            Licensing information: https://bootstrapmade.com/license/

                            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Groovin

                        -->

                        <a href="https://bootstrapmade.com/">Credit:Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>

                    </div>

				</div>

			</div>

		</div>

	</div>

</div>

</footer>

<a href="#" class="scrollup"><i class="fa fa-angle-up fa-2x"></i></a>

<!-- javascript -->

<script src="../assets/js/jquery-1.9.1.min.js"></script>

<script src="../assets/js/jquery.easing.js"></script>

<script src="../assets/js/classie.js"></script>

<script src="../assets/js/login.js"></script>

<script src="../assets/js/bootstrap.js"></script>

<script src="../assets/js/slippry.min.js"></script>

<script src="../assets/js/nagging-menu.js"></script>

<script src="../assets/js/jquery.nav.js"></script>

<script src="../assets/js/jquery.scrollTo.js"></script>

<script src="../assets/js/jquery.fancybox.pack.js"></script> 

<script src="../assets/js/jquery.fancybox-media.js"></script> 

<script src="../assets/js/masonry.pkgd.min.js"></script>

<script src="../assets/js/imagesloaded.js"></script>

<script src="../assets/js/jquery.nicescroll.min.js"></script>

<script src="https://maps.google.com/maps/api/js?sensor=true"></script>

<script src="../assets/js/AnimOnScroll.js"></script>

    <script>

        new AnimOnScroll( document.getElementById( 'grid' ), {

            minDuration : 0.4,

            maxDuration : 0.7,

            viewportFactor : 0.2

        } );

    </script>

<script>

	$(document).ready(function(){

	  $('#slippry-slider').slippry(

		defaults = {

			transition: 'vertical',

			useCSS: true,

			speed: 5000,

			pause: 3000,

			initSingle: false,

			auto: true,

			preload: 'visible',

			pager: false,		

		} 

	  

	  )

	});

</script>



<script src="assets/js/custom.js"></script>

<script src="contactform/contactform.js"></script>



</body>

</html>
Contact GitHub API Training Shop Blog About 

© 2017 GitHub, Inc. Terms Privacy Security Status Help 