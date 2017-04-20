<!-- Ngoma - Team Project
   Group members: Benedicta Amo Bempah, Tito Magero, Veronicah Nanjala, Loltolo Petro Lesapiti
   Web Technologies 
   Task 2.1 - Web Tech: Client Side / Front End Programming

   Author: Veronicah Nanjala
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="African Music Reserve" />
    <meta name="author" content="Ngoma Project" />

    <title>Update register</title>

<!-- Bootstrap -->

<!-- styles -->
    <link rel="stylesheet" href="../assets/css/fancybox/jquery.fancybox.css">
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap-theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/slippry.css">
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/color/default.css">
    <link rel="stylesheet" href="../assets/css/styleSignup.css">
    <link rel="stylesheet" href="../assets/css/landing.css">
   <!--  <link href=".../assets/css/bootstrap.min.css" rel="stylesheet"> -->

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

      <a class="navbar-brand" href="../index.php"> Ngoma </a>

    </div>

  
  <div class="navigation">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>

      <ul class="nav navbar-nav navbar-right">
        <li class="current"><a href="#intro"> Home </a></li>
    <li><a href="listenerSignUp.php">  </a></li>
    <li><a href="artistSignUp.html"> </a></li>
    <li><a href="Login.html"> </a></li>
      </ul></nav>
    </div> <!-- /.navbar-collapse -->
  </div>

  </div>
</div>

</header>

            <!-- Form for data entry begins-->
<div style = "margin-top:100px; ">

<?php require_once('../controller/employeemanagementController.php');?>


<form class="form-horizontal" style="background-color: #4e3f3e;width: 50%;margin:auto;color: white;" name="artForm" action="" method="post" onSubmit ="validateEntries()">
  <div style="text-align:center">
    <h3 style="color:white"> Udate an emplyoee</h3>
  </div>
 <!--  information from the database for easy updates-->
 <?php loadEmployeeeInfo();?>


      <!--Form container begins here -->
  <div>
  <div class="form-group">
    <label class="control-label col-sm-3" for="id">Id:</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name= "id" placeholder="Employee id" required autofocus pattern="[0-9]+" title="Only numbers">
      </div>
  </div>
      
  <div class="form-group">
    <label class="control-label col-sm-3" for="fname">First name:</label>
      <div class="col-lg-8">
        <input type="text" class="form-control" name= "fname" placeholder="First Name" required autofocus pattern="[a-zA-Z]+" title="Only letters">
      </div>
  </div>   

  <div class="form-group">
   <label class="control-label col-sm-3" for="lname">Last name:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="lname" required placeholder="Last name"> 
      </div>
  </div>
     
 <div class="form-group">
   <label class="control-label col-sm-3" for="edate">Employment date:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="edate" required placeholder="dd/mm/yyyy" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" title="Enter the correct date pattern"> 
      </div>
  </div>      
  <div class="form-group">
   <label class="control-label col-sm-3" for="gender">Gender:</label>
      <div class="col-sm-8">
        <input type="radio" name="gender" id="gender" value="M" CHECKED> Male
        <input type="radio" name="gender" id="gender" value="F"> Female
      </div>
  </div>

  <div class="form-group">
   <label class="control-label col-sm-3" for="cnumber">Contact number:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="cnumber" required placeholder="contact number" pattern="[0-9\s]+" title="Only letters and numerics">
      </div>
  </div> 
    
  
 <div class="form-group">
   <label class="control-label col-sm-3" for="rl">Role:</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="rl" required placeholder="Role" pattern="[a-zA-Z\s]+" title="Only letters and spaces"> 
      </div>
  </div> 
  <!-- Submission section for form -->
   <div style="float: right; color: black;"><input type="submit" name="update"><br></div>
</form>
</div>

<!-- end section contact -->
<footer>
<div class="verybottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aligncenter">
        <h1 style="color:white">
          Emplyee Management Section <br>
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
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/login.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/slippry.min.js"></script>
<script src="assets/js/nagging-menu.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/jquery.scrollTo.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/jquery.fancybox-media.js"></script> 
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/jquery.nicescroll.min.js"></script>
<script src="https://maps.google.com/maps/api/js?sensor=true"></script>
<script src="assets/js/AnimOnScroll.js"></script>
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

    <!--javaScrypt link for bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

<script>

</script>

</html>                             