<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>artist</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- my css -->
    <link rel="stylesheet" type="text/css" href="veronicah.css">

  </head>
  <body style="background-color: black">

  <nav class="navbar navbar-default" style="background-color:black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NgomaMuziki</a>
    </div>
    <ul class="nav navbar-nav" style="float: right">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Subscribe</a></li>
      <li><a href="#">Live concerts</a></li>
      <li><a href="#">Help</a></li>
    </ul>
  </div>
</nav>
  <!-- the beginning of php code-->
<?php


?>
<!-- the end of php code-->

<!-- the beginning of html header, footer and form code-->
<header style="background-color: lightblue; height: 40%">
	<div class="page-header" align="center"">
	  <h1>WELCOME TO NGOMA MUSIC</h1>
	</div>
</header>
<form align="center" style="background-color: white;width: 50%;margin: auto;" >
  <div align="center" style="background-color: lightblue">
  <h5> This is your home for african music</h1>
  <h2>Welcome back to our services</h2>
  <h1>Fill in all the spaces to create an account</h1>
  </div>
  <div>
    Name:<br>
     <input type="text" name="name"> <br><br>
     Email Address:<br>
     <input type="text" name="email"> <br><br>
     User name:<br>
     <input type="text" name="uname"> <br><br>
    Password:<br>
     <input type="password" name="password"><br><br>
    Repeat Password:<br>
     <input type="password" name="password"><br><br>
    Copyright Registration Number:<br>
     <input type="text" name="uname"> <br><br>

   <div><div class="btn btn-success" type="button"><a href="artist.php">Sign up</a>
   </div><br><br>
    Already have an account?<div class="btn btn-link"><a href="artist.php">Sign in</a></div>

  </div>

</form>
<footer>
<div class="col-md-4">
       <center>
         <img src="drum.jpg" class="img-circle" alt="...">
        
             <h4 class="footertext">Ngoma</h4>
              <p class="footertext">You african heritage music.<br>
       </center>
   </div>

   <div class="col-md-4">
       <center>
         <img src="music.jpg" class="img-circle" alt="..." style="float:left;padding-right:10px width: 300px; height: 300px; ">
     
             <h4 class="footertext">Ngoma</h4>
              <p class="footertext">You african heritage.<br>
       </center>
   </div>

      <div class="col-md-4">
       <center>
         <img src="lingala.jpg" class="img-circle" alt="..." style="float:left;padding-right:10px width: 300px; height: 300px; ">
  
             <!-- <h4 class="footertext">Ngoma</h4> 
              <p class="footertext">You african heritage.<br> -->
       </center>
   </div>
   </footer>

  </body>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</html>