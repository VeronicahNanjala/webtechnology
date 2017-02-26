<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>artist</title>
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>


<script>
// this method is validating the data provided by the user 
// this javascript code stopped working on the form. So I used html5 elements for validation on the form. I am still working on this
  /*function validateEntries(){
  var validName = document.forms["artForm"]["name"].value;
    if (validName != "") {
      var validChars = /^[A-Za-z]+$/;
      if (validName.value.match(validChars)) {
        return true;
      }else 
      alert("Enter a correct name");
      return false;
    }

   var validEmail = document.forms["artForm"]["email"].value;
    if (validEmail !="") {
      var atSign = validEmail.indexOf("@");
      var dotposition = validEmail.lastIndexOf(".");
      if (atSign<1 || dotposition<dotposition+2 || dotposition+2>=x.length) {
        alert("Enter a correct name");
        return false;
      }else 
      return false;
    }

    var validUsername = document.forms["artForm"]["username"].value;
    if (validUsername != "") {
      var validChars =/^[0-9a-zA-Z]+$/;
      if (validUsername.value.match(validChars)) {
        return true;
      }else 
      alert("Enter a correct user name");
      return false;
    }

   var validPassword = document.forms["artForm"]["password"].value;
    if (validPassword == "") {
      var passValidate=^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$+;
      if (validPassword.value.match(passValidate)) {
          return true;
        }else
        alert("Minimum 8 characters, at least 1 Alphabet and 1 Number");
        return false;
      }
  var confirmedPass = document.forms["artForm"]["confirmpassword"].value;
  if (confirmedPass!="") {
    var confirm = document.forms["artForm"]["password"].value;
    if (confirmedPass==confirm){
        return true;
    }else
    alert("Password missmatch");
    return false;
  }
  // var validcopyrightno = document.forms["artForm"]["copyrightno"].value;
  //   if (validcopyrightno == "") {
  //     alert("Copyright is required");
  //   }

  var validregion = document.forms["artForm"]["region"].value;
    if (validregion != "") {
      var validChars = /^[A-Za-z]+$/;
      if (validregion.value.match(validChars)) {
        return true;
      }else 
      alert("Enter a correct region");
      return false;
    }

  var validmusictype = document.forms["artForm"]["musictype"].value;
    if (validmusictype != "") {
      var validChars = /^[A-Za-z]+$/;
      if (validmusictype.value.match(validChars)) {
        return true;
      }else 
      alert("Enter the correct type of your music");
      return false;
    }

  var validbirthdate = document.forms["artForm"]["birthdate"].value;
    if (validbirthdate != "") {
      var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
      if (pattern.test(validbirthdate)) {
          return true;
      }else
      alert("Input corret date format");
      return false
    }

  var validwebsite = document.forms["artForm"]["website"].value;
    if (validwebsite != "") {
   var urls = /^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/;
   if (urls.test(validwebsite)) {
      return true;
   }else 
      alert("Website is required. If you dont have one, enter url for one of your socila media accounts");
      return false;
    }  

var validabout = document.forms["artForm"]["about"].value;
    // if (validabout == "") {
    //   alert("Write something about yourself");
    // }  

var validcontact = document.forms["artForm"]["contact"].value;
    if (validcontact == "") {
      alert("Write your contact information");
     } 

var validaob = document.forms["artForm"]["aob"].value;
    // if (validaob == "") {
    //   alert("Write sothing unique about you");
    // } 
  }*/

// checking if the passwords entered are similar
  var password = document.getElementById("pass1");
  var confirm_password = document.getElementById("pass2");
  function checkPasswords(){
   if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Your passwords are not matching");
      } else {
        confirm_password.setCustomValidity('');
      }
  }
    password.onchange = checkPasswords();
    confirm_password.onkeyup = checkPasswords();
</script>

<!-- Form for data entry-->
<form class="form-horizontal" style="background-color: #4e3f3e;width: 50%;margin:auto;color: white;" name="artForm" action="" method="post" onSubmit =" checkPasswords()">
  <div align="center">
  <h1> SIGN UP NOW</h1>
  </div>
  <div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name:</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name= "name" placeholder="Full Name" required autofocus pattern="[a-zA-Z\s]+" title="Only letters and spaces">
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
        <input type="text" class="form-control" name="username" required placeholder="Username" maxlength="8" minlength="6" pattern="[a-zA-Z0-9]+" title="Only letters and numerics"> 
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="password">Password:</label>
      <div class="col-sm-10">
        <input type="password" id="pass1" class="form-control" name="password" required placeholder="Password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      </div>
  </div>
     
  <div class="form-group">
   <label class="control-label col-sm-2" for="confirmpassword">Confirm Password:</label>
      <div class="col-sm-10">
        <input type="password" id="pass2" class="form-control"  name="confirmpassword" required placeholder="Confirm Password" minlength="8"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
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
   <div style="float: right; color: black;"><input type="submit" name="submit" onclick="checkPasswords()"></div><br><br>
    Already have an account?<div class="btn btn-link"><a href="home.php">Sign in</a></div>

  </div>
</form>
    <!--javaScrypt link for bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>                             
