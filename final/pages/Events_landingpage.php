<!--@Author: Tito Lulu Magero
	Landing page acting as main events page
	The page displays events according to how close their due dates are in a month
-->
<!DOCTYPE html>
<html>
	<head> 
		<title>
		Number One Choice for African music
		</title>
		<!-- Including bootstrap in HTML code
		-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--<link rel="stylesheet" type="text/css" href="Home.css">-->
		<link rel="stylesheet" type="text/css" href="../css/landing.css">
		<style>	
			#lst a:hover{
				color:green;
			}
			.search{
				display:inline-flex;
				background-color:green;
			}
		</style>
	</head>
	<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT']."../finalprojectwebtech/final/unsecure/processUnsecure.php");?>
		<nav class="navbar navbar-default">
		<div class="container-fluid">
		    <div class="navbar-header">
				<a class="navbar-brand"><h1>Ngoma<h1></a>
			</div>
			<div>
			<div class="row">
			  <div class="col-md-9"></div>
			  <div class="col-md-3"></div>
				<ul class="nav navbar-nav navbar-right">
					<li id="lst"><a href="../index.php">HOME</a></li>
					<li id="lst"><a href="../login/logout.php">Logout</a></li>
					<!-- <li id="lst"><a href="##">ABOUT</a></li> -->
					<!-- <li id="lst"><a href="index.html #works">LOGIN</a></li> -->

					<!-- <li id="lst"><a href="index.html #events">EVENTS</a></li>
					<li id="lst"><a href="index.html #contact">CONTACT US</a></li> -->
				
				</ul>
			</div>
		</div>
		</nav>
		<!--columns to create space in canvas to hold event posters -->
		
			<div class="jumbotron">
				<form method="post" action="">
					<div class="search">
						<input type="text" name="location" placeholder="search event by city">
						<button type="submit" name="eventlocation">&#128269;</button>
					</div>
				</form>
				<h4>Events Happening this Month<h4>
			</div> <!--signals a row of events happening in the same time period-->
				<div> <!--first row-->
					<div class="row">
						<div class="col-lg-4">
							<a href="image/chalewote.jpg" class="fancybox">
								<img src="../image/chalewote.jpg" width="440 px" height="380px">
							</a>
						</div>
						<div class="col-lg-4">
							<a href="image/slam.jpg" data-lightbox="May" class="fancybox">
								<img src="../image/slam.jpg" width="440 px" height="380px" >
							</a>
						</div>
						<div class="col-lg-4">
							<a href="" data-lightbox="May" class="fancybox">
								<img src="../image/lamu.jpg" width="440 px" height="380px" >
							</a>
						</div>
					</div>
				</div>
			<div class="jumbotron">
				<h4>Events Happening in March<h4>
			</div><!--signals a row of events happening in the same time period-->
			
			<div> <!--second row-->
				<div class="row">
					<div class="col-lg-4">
						<a href="image/vic.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/vic.jpg" width="440 px" height="380px">
						</a>
					</div>
					<div class="col-lg-4">
						<a href="image/muthoni.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/muthoni.jpg" width="440 px" height="380px" >
						</a>
					</div>
					<div class="col-lg-4">
						<a href="image/urban.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/urban.jpg" width="440 px" height="380px">
						</a>
					</div>
				</div>
			</div>
			<div class="jumbotron">
				<h4>Events Happening in April<h4>
			</div><!--signals a row of events happening in the same time period-->
			
			<div> <!--third row-->
				<div class="row">
					<div class="col-lg-4">
						<a href="image/mazwai.jpg" data-lightbox="May" class="fancybox">
							<img src="../image/mazwai.jpg" width="440 px" height="380px"">
						</a>
					</div>
					<div class="col-lg-4">
						<a href="image/mask.jpg" data-lightbox="May" class="fancybox">
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
				<h4>Events Happening in May<h4>
			</div><!--signals a row of events happening in the same time period-->
			
			<div> <!--Fourth  row-->
				<div class="row">
					<div class="col-lg-4" data-lightbox="May">
						<a href="image/arab.jpg" class="fancybox" >
							<img src="../image/arab.jpg" width="440 px" height="380px">
						</a>
					</div>
					<div class="col-lg-4" data-lightbox="May">
						<a href="image/nai.jpg" class="fancybox">
							<img src="../image/nai.jpg" width="440 px" height="380px">
						</a>
					</div>
					<div class="col-lg-4" data-lightbox="May">
						<a href="image/zanzibar.jpg" class="fancybox" >
							<img src="../image/zanzibar.jpg" width="440 px" height="380px">
						</a>
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