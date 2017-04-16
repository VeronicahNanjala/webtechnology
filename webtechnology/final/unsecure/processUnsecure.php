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


?>