<!--@Author: Tito Lulu Magero
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/custom.css">
	</head>
	<body  >
		<!--Grid system to accomodate 3 events-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 ">
						<!-- inserting an upcoming event images in the first column of the grid-->
						<a href="image/audience.jpeg" data-lightbox= "This Month">
							<img src="../image/audience.jpg" class= "img-rounded" width="440px" height="300px">
						</a>
						<div class="panel">
								<div class="caption">
									<h3 >Lagos Photo</h3>
									<p>Challenging  World's Afro-Pessimism</p>
								</div>
						</div>
				</div>
				<div class="col-lg-4 ">
						<!-- inserting an upcoming event images in the first column of the grid-->
						<a href="image/album_launch.jpeg" data-lightbox= "This Month">
							<img src="../image/album_launch.jpg" class="img-rounded" width="440px" height="300px">
						</a>
						<div class="panel">
								<div class="caption">
									<h3>Blanket & Wine Festival</h3>
									<p>Explore African Music Through the Eyes of Nairobi</p>
								</div>
						</div>
						
				</div>
				<div class="col-lg-4 " >
						<!-- inserting an upcoming event images in the first column of the grid-->
						<a href="image/dancehall.jpeg" data-lightbox= "This Month">
							<img src="../image/dancehall.jpg " class="img-rounded" width="440px" height="300px ">
						</a>
						<div class="panel" >
								<div class="caption">
									<h3>Ultra Music Festival Johburg</h3>
									<p>Live the experience of African House and Trap Music</p>
								</div>
						</div>
				</div>
			</div>
		
		</div>
		<!-- Wrapping button, linking events section to main events landing page, inside a jumbotron -->
		<div class="jumbotron">
			<div class="container">
				<form action="Events_landingpage.php">
					<a href="Events_landingpage.php" Id="link">
						<button type="submit" class="btn btn-primary btn-block active" >
					</a>Explore More Events
				</form>
					
			</div>
		</div>
	</body>
</html>