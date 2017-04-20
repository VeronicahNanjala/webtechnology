<!-- Ngoma - Team Project
	 @Authors Benedicta Amo Bempah, Tito Magero, Veronicah Nanjala, Loltolo Petro Lesapiti
	 Web Technologies 
	 Task 2.1 - Web Tech: Client Side / Front End Programming

	 Author: Tito
-->

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Ngoma: Enjoy African music</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="African Music Reserve" />
<meta name="author" content="Ngoma Project" />

<!-- styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fancybox/jquery.fancybox.css">
<link href="../assets/css/bootstrap.css" rel="stylesheet" />
<link href="../assets/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/css/slippry.css">
<link href="../assets/css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/color/default.css">
<link rel="stylesheet" href="../assets/css/Home.css">
<!-- <link rel="stylesheet"  href="assets/css/landing.css"> -->

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
        <li class="current"><a href="home.html"> Home </a></li>
		<li><a href="home.html#about"> About </a></li>
		<li><a href="Events_landingpage.html"> Events</a></li>
		<li id="lst"><a href="contactUs.html">CONTACT US</a></li>
      </ul></nav>
    </div> <!-- /.navbar-collapse -->
	</div>

  </div>
</div>

</header>

<!--
	Landing page acting as main events page
	The page displays events according to how close their due dates are in a month

		<!-columns to create space in canvas to hold event posters -->
		
		<div class="container">
			<div class="jumbotron">
				<h4 style="text-align:center; margin-top:70px;">Events Happening this Month</h4>
			</div> <!--signals a row of events happening in the same time period-->
				<div> <!--first row-->
					<div class="row">
						<div class="col-lg-4">
							<a href="chalewote.jpg" class="fancybox">
								<img src="../image/chalewote.jpg" width="440 px" height="380px">
							</a>
						</div>
						<div class="col-lg-4">
							<a href="slam.jpg" data-lightbox="May" class="fancybox">
								<img src="../image/slam.jpg" width="440 px" height="380px" >
							</a>
						</div>
						<div class="col-lg-4">
							<a href="lamu.jpg" data-lightbox="May" class="fancybox">
								<img src="../image/lamu.jpg" width="440 px" height="380px" >
							</a>
						</div>
					</div>
				</div>

			<div class="jumbotron">
				<h4 style="text-align:center">Events Happening in March</h4>
			</div><!--signals a row of events happening in the same time period-->
			
			<div> <!--second row-->
				<div class="row">
					<div class="col-lg-4">
						<a href="vic.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/vic.jpg" width="440 px" height="380px">
						</a>
					</div>
					<div class="col-lg-4">
						<a href="muthoni.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/muthoni.jpg" width="440 px" height="380px" >
						</a>
					</div>
					<div class="col-lg-4">
						<a href="urban.jpg" data-lightbox="May" class="fancybox">
							<img src="image/urban.jpg" width="440 px" height="380px">
						</a>
					</div>
				</div>
			</div>
			<div class="jumbotron">
				<h4 style="text-align:center">Events Happening in April</h4>
			</div><!--signals a row of events happening in the same time period-->
			
			<div> <!--third row-->
				<div class="row">
					<div class="col-lg-4">
						<a href="mazwai.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/mazwai.jpg" width="440 px" height="380px"">
						</a>
					</div>
					<div class="col-lg-4">
						<a href="mask.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/mask.jpg" width="440 px" height="380px">
						</a>
					</div>
					<div class="col-lg-4">
						<a href="jazz.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/jazz.jpg" width="440 px" height="380px">
						</a>
					</div>
				</div>
			</div>
			<div class="jumbotron">
				<h4 style="text-align:center">Events Happening in May</h4>
			</div><!--signals a row of events happening in the same time period-->
			
			<div> <!--Fourth  row-->
				<div class="row">
					<div class="col-lg-4" data-lightbox="May">
						<a href="arab.jpg" class="fancybox" >
							<img src="../image/arab.jpg" width="440 px" height="380px">
						</a>
					</div>
					<div class="col-lg-4" data-lightbox="May">
						<a href="nai.jpg" class="fancybox">
							<img src="../image/nai.jpg" width="440 px" height="380px">
						</a>
					</div>
					<div class="col-lg-4" data-lightbox="May">
						<a href="zanzibar.jpg" class="fancybox" >
							<img src="../image/zanzibar.jpg" width="440 px" height="380px">
						</a>
					</div>
				</div>
			</div>
			</div>
			
		
		
			
	</body>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?v=2.1.6" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js?v=2.1.6"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>