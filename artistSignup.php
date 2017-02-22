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
    <link rel="stylesheet" type="text/css" href="styleSignup.css">

  </head>
  <body style="background-color: black">
  <!--The navigation bar-->

  <!-- the beginning of php code-->
<?php
// validating data entered by users 


?>
<!-- the end of php code-->


<!--Header-->
<div class="page-header">
  <h1 align="center" >WELCOME TO NGOMA MUSIC</h1>
</div>

<!-- Form for data entry-->
<form class="form-horizontal" style="background-color: white;width: 50%;margin: auto;" >
  <div align="center" style="background-color: lightblue">
  <h1> YOUR HOME FOR MUSIC</h1>
  <h1>Fill in all the spaces to create an account</h1>
  </div>
  <div>

  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-sm-10">
        <input type="text" name="name" > <br><br>
      </div>
  </div>

  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" name="email"> <br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="email">User name:</label>
      <div class="col-sm-10">
        <input type="text" name="username"> <br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password"><br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Repeat Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password"><br><br>
      </div>
  </div>
    
  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Copyright Registration Number:</label>
      <div class="col-sm-10">
        <input type="text" name="copyrightno"> <br><br>
      </div>
  </div> 
    
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="email">Region of origin:</label>
      <div class="col-sm-10">
        <input type="text" name="region"> <br><br>
      </div>
  </div> 
    
 <div class="form-group">
   <label class="control-label col-sm-2" for="email">Type of music:</label>
      <div class="col-sm-10">
        <input type="text" name="musictype"> <br><br>
      </div>
  </div>  
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="email">Date of birth:</label>
      <div class="col-sm-10">
        <input type="text" name="birthdate"> <br><br>
      </div>
  </div>  
   

  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Website:</label>
      <div class="col-sm-10">
        <input type="text" name="website"> <br><br>
      </div>
  </div>
   
  <div class="form-group">
   <label class="control-label col-sm-2" for="email">About you:</label>
      <div class="col-sm-10">
        <textarea name="about"  rows="4" cols="50"></textarea><br><br>
      </div>
  </div>
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="email">Contact information:</label>
      <div class="col-sm-10">
        <textarea name="contact"  rows="4" cols="50"></textarea><br><br>
      </div>
  </div>
   
 <div class="form-group">
   <label class="control-label col-sm-2" for="email">Any other thing for fans:</label>
      <div class="col-sm-10">
        <textarea name="aob"  rows="4" cols="50"></textarea><br><br>
      </div>
  </div>

   <div><div class="btn btn-default" type="button"><a href="artist.php">Sign up</a>
   </div><br><br>
    Already have an account?<div class="btn btn-link"><a href="home.php">Sign in</a></div>

  </div>
</form>

<!--Footer-->
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

    <!--javaScrypt link for bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>