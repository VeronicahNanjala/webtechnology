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
  <body>
  <!-- the beginning of php code-->
<?php


?>
<!-- the end of php code-->

<!-- the beginning of html header, footer and form code-->
<header >
	<div class="page-header" align="center" style="background-color: grey">
	  <h1>WELCOME TO NGOMA MUSIC</h1>
	</div>
</header>

<form action="<?php echo htmlspecialchars($_SERVER[$PHP_SELF]) ?>">
  
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
         <img src="lingala.jpg" class="img-circle" alt="..." style="float:left;padding-right:10px width: 250px; height: 250px; ">
  
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