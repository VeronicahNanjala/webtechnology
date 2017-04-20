<<<<<<< HEAD
<?php 
/*
*@author Tito Lulu Magero
*/

require_once('../database/dbclass.php');

if(isset($_POST['login'])){
	validatelogin();
}
if(isset($_POST['registerartist'])){
	validateartist();
}
if(isset($_POST['registerlistener'])){
	validatelistner();
}

//check user details in database
function verifylogin($name,$pwd){
	$sql="SELECT username, password FROM artists, listeners WHERE 
	listeners.username='$name' or artists.username='$name' AND 
	listeners.password= '$pwd'or artists.password='$pwd'";
	
	//create an instance of the database class
	$verifylogin= new databaseConnection;
	$executeqry=$verifylogin->querydb($sql);
	
	if ($executeqry){
		$row= $verifylogin->fetchdb();
		if((password_verify($pwd) = $row['password'])){
			header('Location: ../index.php');
			
		}
		else{
			echo'<br> Invalid login details';
		}
		
	}else{
		die();
	}
}
function regartist($fn,$ln,$uname,$email,$pwd,$mtype){
	//hash password
	$pwdhash=password_hash($pwd,PASSWORD_DEFAULT);
	//query
	$sql="INSERT INTO artists(first_name,last_name,user_name,
	email,password,music_type) 
	VALUES ('$fn','$ln','$uname','$email','$pwdhash','$mtype')";
	
	$register=new databaseConnection;
	//execute query
	$executeqry=$resgister->querydb($sql);
	if($register){
		header('Location: ../login/');
	}
	else{
		echo 'uer cannot be registered';
	}
	
	
}
function reglistener($fn,$ln,$uname,$email,$pwd){
	//hash password
	$pwdhash=password_hash($pwd,PASSWORD_DEFAULT);
	//query
	$sql="INSERT INTO listeners(first_name,last_name,username,email,password) 
	VALUES ('$fn','$ln''$uname','$email','$pwdhash')";
	$register=new databaseConnection;
	//execute query
	$executeqry=$resgister->querydb($sql);
	if($register){
		header('Location: ../login/');
	}
	else{
		echo 'uer cannot be registered';
	}
	
	
}
/*function to validate listner registration details
*requests form input and validates using regex and php
*calls reglistener()
*/
function validatelistener(){
	$fn= $_REQUEST['fname'];
	$ln= $_REQUEST['lname'];
	$uname= $_REQUEST['fusername'];
	$email= $_REQUEST['femail'];
	$pwd= $_REQUEST['fpassword'];
	reglistener($fn,$ln,$uname,$email,$pwd);
}
/*function to validate artist registration details
*requests form inputs and validates them using regex and php
*calls regartist()
*/
function validateartist(){
	$fn= $_REQUEST['fname'];
	$ln= $_REQUEST['lname'];
	$uname= $_REQUEST['username'];
	$email= $_REQUEST['email'];
	$pwd= $_REQUEST['password'];
	$mtype= $_REQUEST['musictype'];
	regartists($fn,$ln,$uname,$email,$pwd,$mtype);
	
}
/*validate login details
*requets login input and validate using regex and php
*calls verifylogin()
*/
function validatelogin(){
	//request and validate login details
	$name = $_REQUEST['uname'];
	$pwd= $_REQUEST['pwd'];
	//call verify login function
	verifylogin($name,$pwd);
}
/*function checking whether username exists in database
*calls regartist
*/
function checkunameA(){
	
}
function checkunameL(){
	
}


=======
<?php 
/*
*@author Tito Lulu Magero
*/

require_once('../database/dbclass.php');

if(isset($_POST['login'])){
	verifylogin();
}
if(isset($_POST['registerartist'])){
	regartist();
}
if(isset($_POST['registerlistener'])){
	reglistner();
}

//check user details in database
function verifylogin(){
	$sql="SELECT username, password FROM artists, listeners WHERE 
	listeners.username='$name' or artists.username='$name' AND 
	listeners.password= '$pwd'or artists.password='$pwd'";
	
	//create an instance of the database class
	$verifylogin= new databaseConnection;
	$executeqry=$verifylogin->querydb($sql);
	
	if ($executeqry){
		$row= $verifylogin->fetchdb();
		if((password_verify($pwd) = $row['password'])){
			header('Location: ../index.php');
			
		}
		else{
			echo'<br> Invalid login details';
		}
		
	}else{
		die();
	}
}
function regartist(){
	//hash password
	$pwdhash=password_hash($pwd,PASSWORD_DEFAULT);
	//query
	$sql="INSERT INTO artists(first_name,last_name,user_name,
	email,password,music_type) 
	VALUES ('$fn','$ln','$uname','$email','$pwdhash','$mtype')";
	
	$register=new databaseConnection;
	//execute query
	$executeqry=$resgister->querydb($sql);
	if($register){
		header('Location: ../login/');
	}
	else{
		echo 'uer cannot be registered';
	}
	
	
}
function reglistener(){
	//hash password
	$pwdhash=password_hash($pwd,PASSWORD_DEFAULT);
	//query
	$sql="INSERT INTO listeners(username,email,password) 
	VALUES ('$uname','$email','$pwdhash')";
	$register=new databaseConnection;
	//execute query
	$executeqry=$resgister->querydb($sql);
	if($register){
		header('Location: ../login/');
	}
	else{
		echo 'uer cannot be registered';
	}
	
	
}
/*function to validate listner registration details
*requests form input and validates using regex and php
*calls reglistener()
*/
function validatelistener(){
	$uname= $_REQUEST[];
	$email= $_REQUEST[];
	$pwd= $_REQUEST[];
	reglistener();
}
/*function to validate artist registration details
*requests form inputs and validates them using regex and php
*calls regartist()
*/
function validateartist(){
	$fn= $_REQUEST[];
	$ln= $_REQUEST[];
	$uname= $_REQUEST[];
	$email= $_REQUEST[];
	$pwd= $_REQUEST[];
	$mtype= $_REQUEST[];
	regartists();
	
}
>>>>>>> 64fa4679e7bb5e60ac6d28f2942645bddada2e7a
?>