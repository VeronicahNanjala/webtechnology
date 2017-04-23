<?php 
/*
*@author 
*/
require_once('../database/dbclass.php');
if(isset($_POST['login'])){
	validatelogin();
}

if(isset($_POST['loginA'])){
	validateloginArt();
}

if(isset($_POST['SignupArt'])){
	validateartist();
}
if(isset($_POST['listenerSignUp'])){
	validatelistener();
}

//check user details in database
function verifylogin($username,$password){
	$hash=password_hash($password, PASSWORD_DEFAULT);

	$verlogin= new databaseConnection;
	$sql="SELECT username, password FROM  listeners WHERE username= '$username' ";
	$result=$verlogin->querydb($sql);

	if ($result){
		$row=$verlogin->fetchdb();
		$pass=$row['password'];

		if(password_verify($password, $pass)==$row['password']){
			session_start();
			$_SESSION['username']=$row['username'];
			header("location: ../index.php");
		}

	 } else {echo  mysqli_error($verlogin->connect);}
}

//check user details in database
function verifyloginArtist($username,$password){
	$hash=password_hash($password, PASSWORD_DEFAULT);

	$verlogin= new databaseConnection;
	$sql="SELECT username, password FROM  artists WHERE username= '$username' ";
	$result=$verlogin->querydb($sql);

	if ($result){
		$row=$verlogin->fetchdb();
		$pass=$row['password'];

		if(password_verify($password, $hash)==$row['password']){
			session_start();
			$_SESSION['username']=$row['username'];
			header("location: ../index.php");
		}

	 } else {echo  mysqli_error($verlogin->connect);}
}

function regartist($fn,$ln,$email,$uname,$pwd,$mtype,$contact){
	//hash password
	$pwdhash=password_hash($pwd,PASSWORD_DEFAULT);
	//query
	$sql="INSERT INTO artists(first_name,last_name,username,
	email,password,music_type, contact_no) 
	VALUES ('%S','%s','%s','%s','%s','%s','%d')";
	
	$register=new databaseConnection;
	//execute query
	$executeqry=$register->sqlInjection($sql,$fn,$ln,$email,$uname,$pwd,$mtype,$contact);
	if($executeqry){
		header('Location: ../login/');
	}
	else{
		echo 'user cannot be registered'. mysqli_error($register->connect);
	}	
	
	
}


function reglistener($uname,$pwd){
	//hash password
	$pwdhash=password_hash($pwd,PASSWORD_DEFAULT);
	//query
	$sql="INSERT INTO listeners(username,password) 
	VALUES ('%s','%s')";
	$register=new databaseConnection;
	//execute query
	//$executeqry=$register->querydb($sql);
	$executeqry=$register->sqlInjection($sql,$uname,$pwdhash);
	if($executeqry){
		header('Location: ../login/');
	}
	else{
		echo 'user cannot be registered'. mysqli_error($register->connect);
	}	
	
	
}
/*function to validate listner registration details
*requests form input and validates using regex and php
*calls reglistener()
*/
function validatelistener(){
	
$nameErr = $emailErr = $snameErr = $unameErr = $pwdErr="";
$name = $email = $sname = $uname = $pwd = "";
//validate username
  if (empty($_POST["fusername"])) 
  {
   		 $unameErr = "Username is required";
  } 
  else
   {
    	$uname = test_input($_POST["fusername"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$uname))
    		 {

      			$unameErr = "Only letters and white space allowed"; 
   			 }
  }


//validate password
  if (empty($_POST["fpassword"])) {
    $pwdErr = "Password is required";
  } else {
    $pwd = test_input($_POST["fpassword"]);
  }

	reglistener($uname,$pwd);
}


/*function to validate artist registration details
*requests form inputs and validates them using regex and php
*calls regartist()
*/
function validateartist(){
	$fn = $ln = $uname = $email = $pwd = $crn = $mtype = $region = $contact ="";
$fnErr = $lnErr = $unameErr = $emailErr = $pwdErr = $crnErr = $mtypeErr = $regionErr = $contactErr ="";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	 	//VALIDADTE FIRST NAME
 		if (empty($_POST["fname"]))
 		 {
   	    $fnErr = "Name is required";
         }
		else  
		{
    		$fn = test_input($_POST["fname"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$fn))
    		 {

      			$fnErr = "Only letters and white space allowed"; 
   			 }
   		}
   
//VALIDATE SURNAME
  if (empty($_POST["lname"])) 
  {
  		$lnErr = "last is required";
  } 
  else
   {
   		$ln = test_input($_POST["lname"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$ln))
    		 {

      			$lnErr = "Only letters and white space allowed"; 
   			 }
  }


  //VALIDATE EMAIL

  if (empty($_POST["email"]))
   {
    $emailErr = "Email is required";
	}
   else 
   {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
     {

      $emailErr = "Invalid email format"; 
    }
}


//validate username
  if (empty($_POST["username"])) 
  {
   		 $unameErr = "Username is required";
  } 
  else
   {
    	$uname = test_input($_POST["username"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$uname))
    		 {

      			$unameErr = "Only letters and white space allowed"; 
   			 }
  }


//validate password
  if (empty($_POST["password"])) {
    $pwdErr = "Password is required";
  } else {
    $pwd = test_input($_POST["password"]);
  }


  //VALIDADTE music type
 		if (empty($_POST["musictype"]))
 		 {
   	    $mtypeErr = "Music type is required";
         }
		else  
		{
    		$mtype = test_input($_POST["musictype"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$mtype))
    		 {

      			$mtypeErr = "Only letters and white space allowed"; 
   			 }
   		}

   		//VALIDADTE contact
 		if (empty($_POST["contact"]))
 		 {
   	    $contactErr = "Contact is required";
         }
		else  
		{
    		$contact = test_input($_POST["contact"]);
   			 // check if contact only contains numbers
    		if (!preg_match("/^[0-9]*$/",$contact))
    		 {

      			$contactErr = "Only numbers allowed"; 
   			 }
   		}


	regartist($fn,$ln,$email,$uname,$pwd,$mtype,$contact);
	
}
}
/*validate login details
*requets login input and validate using regex and php
*calls verifylogin()
*/
function validatelogin(){
	/*
*code for validation
*/
	      if (isset($_POST['usename']) && !empty($_POST['usename'])){
	          $username = $_POST['usename'];
	      }
	      else{
	           echo "User name is required <br>";
	      }

	      if (isset($_POST['password']) && !empty($_POST['password'])){
	          $password = $_POST['password'];  
	      }else{
	           echo "Password name is required <br>";
	      }
/*
*if validation is successful, run the verifylogin function
*/
verifylogin($username, $password,$email,);

}

function validateloginArt(){
	/*
*code for validation
*/
	      if (isset($_POST['usename']) && !empty($_POST['usename'])){
	          $username = $_POST['usename'];
	      }
	      else{
	           echo "User name is required <br>";
	      }

	      if (isset($_POST['password']) && !empty($_POST['password'])){
	          $password = $_POST['password'];  
	      }else{
	           echo "Password name is required <br>";
	      }
/*
*if validation is successful, run the verifylogin function
*/
verifyloginArtist($username,$password);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>