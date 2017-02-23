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

// variables to store values
$name="";
$email="";
$username="";
$password="";
$copyrightno="";
$region="";
$musictype="";
$birthdate="";
$website="";
$about="";
$contact="";
$aob="";

// variable that holds encrypted password
// these will be stored in the database
$passwordEncrypt="";
$validEmail="";

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
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailErr = "Invalid email format"; 
         }
         else{
         $validEmail=$email;
         }
    }
      else{
      $emailErr="Email is required";
      }

  if (isset($_POST['username']) && !empty($_POST['username'])){
     $username=$_POST['username'];
     }
      else{
      $userNameErr="Username is required";
      }

  if (isset($_POST['copyrightno']) && !empty($_POST['copyrightno'])){
      $copyrightno=$_POST['copyrightno'];
     }
      else{
      $copyrightErr="Copyright is required";
      }

  if (isset($_POST['region']) && !empty($_POST['region'])){
      $region=$_POST['region'];
     }
      else{
      $regionErr="Region is required";
      }

  if (isset($_POST['musictype']) && !empty($_POST['musictype'])){
      $musictype=$_POST['musictype'];
      }
      else{
      $musicTypeErr="The type of your music is required";
      }

   if (isset($_POST['birthdate']) && !empty($_POST['birthdate'])){
      $birthdate=$_POST['birthdate'];
      }
      else{
      $birthdateErr="Required";
      }

  if (isset($_POST['about']) && !empty($_POST['about'])){
      $about=$_POST['about'];
      }
      else{
      $aboutErr="Required";
      }

  if (isset($_POST['password']) && !empty($_POST['password'])){
   // encrypting password and checking strength
      $password=$_POST['password'];
         if (strlen($password) < 8) {
              $passwordErr = "Password too short! At least 8 characters";
          }

          if (!preg_match("#[0-9]+#", $password)) {
              $passwordErr = "Password must include at least one number!";
          }

          if (!preg_match("#[a-zA-Z]+#", $password)) {
              $passwordErr = "Password must include at least one letter!";
          } 
            else{
               $passwordEncrypt=password_hash($password,PASSWORD_DEFAULT);
            }    

      }
      else{
      $passwordErr="Required";
      }

  if (isset($_POST['contact']) && !empty($_POST['contact'])){
      $contact=$_POST['contact'];
      }
      else{
      $contactErr="";
      }
  if (isset($_POST['aob']) && !empty($_POST['aob'])){
      $aob=$_POST['aob'];
      }
      else{
      $aobErr="";
      }

  if (isset($_POST['website']) && !empty($_POST['website'])){
      $website=$_POST['website'];
      }
      else{
      $websiteErr="";
      }      
}
?>
<!-- the end of php code-->

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
        <input type="text" name="name" value="<?php echo htmlspecialchars($name);?>">
          <span style="color: red">*<?php echo $nameErr?></span><br><br>
      </div>
  </div>

  <div class="form-group">
   <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>"> 
          <span style="color: red">*<?php echo $emailErr?></span><br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="username">User name:</label>
      <div class="col-sm-10">
        <input type="text" name="username" value="<?php echo htmlspecialchars($username);?>"> 
          <span style="color: red">*<?php echo $userNameErr?></span><br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password" value="<?php echo htmlspecialchars($password);?>">
          <span style="color: red">*<?php echo $passwordErr?></span><br><br>
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="password">Repeat Password:</label>
      <div class="col-sm-10">
        <input type="password" name="password" value="<?php echo htmlspecialchars($password);?>">
          <span style="color: red">*<?php echo $passwordErr?></span><br><br>
      </div>
  </div>
    
  <div class="form-group">
   <label class="control-label col-sm-2" for="copyrightno">Copyright Registration Number:</label>
      <div class="col-sm-10">
        <input type="text" name="copyrightno" value="<?php echo htmlspecialchars($copyrightno);?>">
          <span style="color: red">*<?php echo $copyrightErr?></span><br><br>
      </div>
  </div> 
    
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="region">Region of origin:</label>
      <div class="col-sm-10">
        <input type="text" name="region" value="<?php echo htmlspecialchars($region);?>"> 
         <span style="color: red">*<?php echo $regionErr?></span><br><br>
      </div>
  </div> 
    
 <div class="form-group">
   <label class="control-label col-sm-2" for="musictype">Type of music:</label>
      <div class="col-sm-10">
        <input type="text" name="musictype" value="<?php echo htmlspecialchars($musictype);?>"> 
          <span style="color: red">*<?php echo $musicTypeErr?></span><br><br>
      </div>
  </div>  
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="birthdate">Date of birth:</label>
      <div class="col-sm-10">
        <input type="text" name="birthdate" value="<?php echo htmlspecialchars($birthdate);?>"> 
          <span style="color: red">*<?php echo $birthdateErr?></span><br><br>
      </div>
  </div>  
   

  <div class="form-group">
   <label class="control-label col-sm-2" for="website">Website:</label>
      <div class="col-sm-10">
        <input type="text" name="website" value="<?php echo htmlspecialchars($website);?>"> <br>
      </div>
  </div>
   
  <div class="form-group">
   <label class="control-label col-sm-2" for="about">About you:</label>
      <div class="col-sm-10">
        <textarea name="about" rows="4" cols="50">
        <?php if(isset($about)){ echo htmlspecialchars($about);}?></textarea>
          <span style="color: red">*<?php echo $aboutErr?></span><br><br>
      </div>
  </div>
  
 <div class="form-group">
   <label class="control-label col-sm-2" for="contact">Contact information:</label>
      <div class="col-sm-10">
        <textarea name="contact"  rows="4" cols="50">
        <?php if(isset($contact)){echo htmlspecialchars($contact);}?></textarea><br></div>
  </div>
   
 <div class="form-group">
   <label class="control-label col-sm-2" for="aob">Any other thing for fans:</label>
      <div class="col-sm-10">
        <textarea name="aob"  rows="4" cols="50">
        <?php if (isset($aob)){echo htmlspecialchars($aob);}?></textarea><br><br></div></div>
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