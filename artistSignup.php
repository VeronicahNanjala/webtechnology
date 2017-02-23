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
  <body style="background-color: skyblue">
    <!-- the beginning of php code-->
<?php
// validating data entered by users 
// varibles to indicate required fields 
$nameErr="";
$emailErr="";
$userNameErr="";
$passwordErr="";
$copyrightErr="";
$regionErr="";
$musicTypeErr="";
$websiteErr="";
$aboutErr="";
$contactErr="";
$birthdateErr="";

// checking if the post method has been requested.
// checking if the field data are not empty
if(isset($_POST['submit'])){
  if (isset($_POST['name']) && !empty($_POST['name'])){
    $name=$_POST['name'];
  }
     else{
      $nameErr="Name is required";
      }

  if (isset($_POST['email']) && !empty($_POST['email'])){
    $email=$_POST['email'];
    }
      else{
      $emailErr="password is required";
      }
}
?>
<!-- the end of php code-->


  <!--The navigation bar-->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NGOMA MUSIC</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li><a href="#">Menu 3</a></li>
    </ul>
  </div>
</nav>

<!--Header-->
<div class="page-header">
  <h1 align="center" >WELCOME TO NGOMA MUSIC</h1>
</div>

<!-- Form for data entry-->
<form method="post" action="" class="form-horizontal" style="background-color: white;width: 50%;margin: auto;" >
  <div align="center">
  <h1> SIGN UP NOW</h1>
  </div>
  <div>

  <div class="form-group">
   <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" name="name" >
          <span style="color: red">*<?php echo $nameErr?></span><br><br>
      </div>
  </div>

  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" name="email"> 
          <span style="color: red">*<?php echo $emailErr?></span><br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="username">User name:</label>
      <div class="col-sm-10">
        <input type="text" name="username"> <br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password"><br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="password">Repeat Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password"><br><br>
      </div>
  </div>
    
  <div class="form-group">
   <label class="control-label col-sm-2" for="copyrightno">Copyright Registration Number:</label>
      <div class="col-sm-10">
        <input type="text" name="copyrightno"> <br><br>
      </div>
  </div> 
    
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="region">Region of origin:</label>
      <div class="col-sm-10">
        <input type="text" name="region"> <br><br>
      </div>
  </div> 
    
 <div class="form-group">
   <label class="control-label col-sm-2" for="musictype">Type of music:</label>
      <div class="col-sm-10">
        <input type="text" name="musictype"> <br><br>
      </div>
  </div>  
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="birthdate">Date of birth:</label>
      <div class="col-sm-10">
        <input type="text" name="birthdate"> <br><br>
      </div>
  </div>  
   

  <div class="form-group">
   <label class="control-label col-sm-2" for="website">Website:</label>
      <div class="col-sm-10">
        <input type="text" name="website"> <br><br>
      </div>
  </div>
   
  <div class="form-group">
   <label class="control-label col-sm-2" for="about">About you:</label>
      <div class="col-sm-10">
        <textarea name="about"  rows="4" cols="50"></textarea><br><br>
      </div>
  </div>
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="contact">Contact information:</label>
      <div class="col-sm-10">
        <textarea name="contact"  rows="4" cols="50"></textarea><br><br>
      </div>
  </div>
   
 <div class="form-group">
   <label class="control-label col-sm-2" for="aob">Any other thing for fans:</label>
      <div class="col-sm-10">
        <textarea name="aob"  rows="4" cols="50"></textarea><br><br>
      </div>
  </div>

   <div><input type="submit" name="submit" class="btn btn-default">
   </div><br><br>
    Already have an account?<div class="btn btn-link"><a href="home.php">Sign in</a></div>

  </div>
</form>

<!--Footer-->
<footer>
</footer>


    <!--javaScrypt link for bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>