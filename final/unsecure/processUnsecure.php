<?php 
/*
*@author Tito Lulu Magero
*/

require_once('../database/dbclass.php');

if(isset($_POST['login'])){
	verifylogin();
}
if(isset($_POST['register'])){
	verifyreg();
}

//check user details in database
function verifylogin(){
	$sql="SELECT first_name, email FROM users WHERE 
	first_name ='$name' AND email='$email'";
	//create an instance of the database class
	$verifylogin= new databaseConnection;
	$executeqry=$verifylogin->querydb($sql);
	
	if ($executeqry){
		$row= $verifylogin->fetchdb();
		if($pwd = $row['pwd']){
			header('Location: ../index.php');
			
		}
		else{
			echo'<br> Invalid login details';
		}
		
	}else{
		die();
	}
}
function register(){
	$sql="INSERT INTO users(first_name,last_name,email) 
	VALUES ('$fn,$ln,$email')";
	$register=new databaseConnection;
	
	$executeqry=$resgister->querydb($sql);
	if($register){
		header('Location: ../login/');
	}
	else{
		echo 'uer cannot be registered';
	}
	
	
}


?>