<!-- Ngoma - Team Project
   Group members: Benedicta Amo Bempah, Tito Magero, Veronicah Nanjala, Loltolo Petro Lesapiti
   Web Technologies 
   Task 2.1 - Web Tech: Client Side / Front End Programming

   Author: Lesapiti Loltolo
-->

<!Doctype>
<html>
    <head>
        <title>Login To Ngoma</title>
    </head>

<!-- styles -->
<link rel="stylesheet" type="text/css" href=../assets/css/login_style.css> 
<link rel="stylesheet" href="../assets/css/fancybox/jquery.fancybox.css">
<link href="../assets/css/bootstrap.css" rel="stylesheet" />
<link href="../assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="../stylesheet" href="assets/css/slippry.css">
<link href="../assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/color/default.css">
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
<?php require_once ("../unsecure/processUnsecure.php"); ?>
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
        <li><a href="../index.php"> Home </a></li>
        <li><a href="../pages/contactUs.php"> Contact Us </a></li>
      </ul></nav>
    </div> <!-- /.navbar-collapse -->
    </div>

  </div>
</div>

</header>



<body>
    <div style = "margin-top:100px; ">
        <form name="ngoma" method="post">
    <header> 
        <h1> Welcome </h1>
            <p>
                Sign in for free. Listen to songs you love, create your own favourites playlist and share songs with friends
            </p>
    </header>

  <div class="col_1">
        <label><b> Username </b></label>
         <input type="text" placeholder="Enter Username" id="uname" name="uname">
          <input type="checkbox" checked="checked"> Remember Username<br>
            <br>
            <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" id="psw" name="pass">
            <br>
         <div class=helper>* The password should be atleast 6 characters long. </div>

        <button type="submit" name="userlogin" onclick="validate()">Login as listener </button>
         <br><br>

  <!--<div class="col_1" style="background-color:#f1f1f1">-->
    <button type="submit" onclick="cancel()" class="cancel">Cancel</button>
    <span class="Forgotpass">Need <a href=""> help?</a></span>
  </div>
 </form>
 </div>

<footer style = "margin-top: 10px">
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

                        <a href="https://bootstrapmade.com/">Credit:Free Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>

 <script src="assets/js/login.js"></script>

 
</body>
</html>