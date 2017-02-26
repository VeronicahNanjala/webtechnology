<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>artist</title>
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/slippry.css">
<link href="assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/color/default.css">
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

      <a class="navbar-brand" href="index.html"> Ngoma </a>

    </div>

  <div class="navigation">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><nav>

      <ul class="nav navbar-nav navbar-right">
        <li class="current"><a href="#intro"> Home </a></li>
    <li><a href="#about"> About </a></li>
    <li><a href="#works"> Sign Up </a></li>
    <li><a href="Login.html"> Sign In</a></li>
    <li><a href="#contact"> Contact Us </a></li>
      </ul></nav>
    </div> <!-- /.navbar-collapse -->
  </div>

  </div>
</div>

</header>

<!-- Form for data entry-->

<div style="margin-top: 100px">
  <form class="form-horizontal" style="background-color: #4e3f3e;width: 50%;margin:auto;color: white;" name="artForm" action="" method="post" onSubmit =" validateEntries()">
    <div align="center">
    <h1 style="color: white;"> SIGN UP NOW</h1>
    </div>
    <div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="fname">First name:</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name= "fname" placeholder="Full Name" required autofocus pattern="[a-zA-Z]+" title="Only letters">
        </div>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="lname">Last name:</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name= "lname" placeholder="Full Name" required autofocus pattern="[a-zA-Z]+" title="Only letters">
        </div>
    </div>   

    <div class="form-group">
     <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" required placeholder="Email"> 
        </div>
    </div>
       
    <div class="form-group">
     <label class="control-label col-sm-2" for="username">User name:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="username" required placeholder="Username" minlength="6" pattern="[a-zA-Z0-9]+" title="Only letters and numerics"> 
        </div>
    </div>
       
    <div class="form-group">
     <label class="control-label col-sm-2" for="password">Password:</label>
        <div class="col-sm-10">
          <input type="password" id="pass1" class="form-control" name="password" required placeholder="Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
        </div>
    </div>

    <div class="form-group">
     <label class="control-label col-sm-2" for="copyrightno">Copyright Registration Number:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="copyrightno" required placeholder="Copyright" pattern="[a-zA-Z0-9\s]+" title="Only letters and numerics">
        </div>
    </div> 
      
    
   <div class="form-group">
     <label class="control-label col-sm-2" for="region">Region of origin:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="region" required placeholder="Region" pattern="[a-zA-Z\s]+" title="Only letters and spaces"> 
        </div>
    </div> 
      
   <div class="form-group">
     <label class="control-label col-sm-2" for="musictype">Type of music:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="musictype" required placeholder="Music type" pattern="[a-zA-Z\s]+" title="Only letters and spaces"> 
        </div>
    </div>  
    
   <div class="form-group">
     <label class="control-label col-sm-2" for="birthdate">Date of birth:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="birthdate" required placeholder="dd/mm/yyyy" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" title="Enter the correct date pattern"> 
        </div>
    </div>  
     

    <div class="form-group">
     <label class="control-label col-sm-2" for="website">Website:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="website" required placeholder="www.something" pattern="https?://.+" title="Enter a correct url and start with https://"> 
        </div>
    </div>
     
    <div class="form-group">
     <label class="control-label col-sm-2" for="about">About you:</label>
        <div class="col-sm-10">
          <textarea name="about" class="form-control" rows="4" cols="50" required placeholder="Write about you" pattern="[a-zA-Z0-9\s]+" title="Only letters, numbers and spaces"></textarea>
        </div>
    </div>
    
   <div class="form-group">
     <label class="control-label col-sm-2" for="contact">Contact information:</label>
        <div class="col-sm-10">
          <textarea name="contact" class="form-control" rows="4" cols="50" required placeholder="Contact information" pattern="[a-zA-Z0-9\s]+" title="Only letters, numbers and spaces"></textarea>
          </div>
    </div>
     
   <div class="form-group">
     <label class="control-label col-sm-2" for="aob">Any other thing for fans:</label>
        <div class="col-sm-10">
          <textarea name="aob" class="form-control" rows="4" cols="50" required placeholder=" Something unique about yourself" pattern="[a-zA-Z0-9\s]+" title="Only letters, numbers and spaces"></textarea>
          </div>
        </div>
     <div style="float: right; color: black;"><input type="submit" name="Sign up" onclick="checkPasswords()"></div><br><br>
      Already have an account?<div class="btn btn-link"><a href="home.php">Sign in</a></div>

    </div>
  </form>
</div>

<footer>
<div class="verybottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aligncenter">
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
<script src="assets/js/jquery-1.9.1.min.js"></script>
<script src="assets/js/jquery.easing.js"></script>
<script src="assets/js/classie.js"></script>
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

<script src="assets/js/custom.js"></script>
<script src="contactform/contactform.js"></script>

  </body>
</html>                             