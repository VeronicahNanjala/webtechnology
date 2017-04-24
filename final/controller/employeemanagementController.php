<?php
/**
* @author Veronicah Nanjala
* this class validates the entries that the admin enter while registering, deleting or updating an employee
*/
require_once("../classes/employeemanagement.php");

<<<<<<< HEAD
if (isset($_POST['add'])) {
	// register the employee
	addEmployee();
}

=======
/**
* @author Veronicah Nanjala
* this class validates the entries that the admin enter while registering, deleting or updating an employee
*/
require_once("../classes/employeemanagement.php");

if (isset($_POST['add'])) {
	// register the employee
	addEmployee();
}

>>>>>>> nanjala
elseif (isset($_GET['delete'])) {
	$clear = (int)($_GET['delete']);
	$del = new EmplyeeManagement;
	$del -> deleteEmployee($clear);

	//deleteEmployee();
}

elseif (isset($_POST['update'])) {
	updateEmployee();
}

<<<<<<< HEAD
=======
elseif (isset($_POST['addAmin'])) {
	addAdmin();
}
>>>>>>> nanjala


/*
*Funtion to validate data from the form submitted by the admin for registration 
*/
function validateData(){
	if (isset($_POST['id']) && !empty($_POST['id'])){
		 $eId=preg_match('/^[0-9]+$/', $_POST['id']);
		 if ($eId==true) {
		 $employeeId = $_POST['id'];
		 }
		 else{
		      echo "Id pattern is wrong. Only numbers <br>";
		     }
	}
	else{
		echo "Id is required";
	}



	if (isset($_POST['fname']) && !empty($_POST['fname'])){
		 $eFname=preg_match('/^[a-zA-Z]+$/', $_POST['id']);
		 if ($eFname==true) {
		 $employeeFname = $_POST['id'];
		 }
		 else{
		      echo "Id pattern is wrong. Only letter <br>";
		     }
	}
	else{
		echo "First name is required";
	}



	if (isset($_POST['lname']) && !empty($_POST['lname'])){
		 $eLname=preg_match('/^[0-9]+$/', $_POST['lname']);
		 if ($eLname==true) {
		 $employeeLname = $_POST['lname'];
		 }
		 else{
		      echo "Id pattern is wrong. Only numbers <br>";
		     }
	}
	else{
		echo "Last name is required";
	}



	if (isset($_POST['edate']) && !empty($_POST['edate'])){
		 $edateE=preg_match('/^0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}/', $_POST['edate']);
		 if ($edateE==true) {
		 $employeeEdate = $_POST['edate'];
		 }
		 else{
		      echo "Enter the correct date pattern <br>";
		     }
	}
	else{
		echo "Date is required";
	}



	if (isset($_POST['gender']) && !empty($_POST['gender'])){
		 $employeeGender = $_POST['gender'];
		}
	else{
		  echo "Gender is required <br>";
		}




	if (isset($_POST['cnumber']) && !empty($_POST['cnumber'])){
		 $eCnum=preg_match('/^[0-9]+$/', $_POST['cnumber']);
		 if ($eCnum==true) {
		 $employeeContact = $_POST['cnumber'];
		 }
		 else{
		      echo "Id pattern is wrong. Only numbers <br>";
		     }
	}
	else{
		echo "Contact number required";
	}


<<<<<<< HEAD


=======
>>>>>>> nanjala
	if (isset($_POST['rl']) && !empty($_POST['rl'])){
		 $eRole=preg_match('/^[a-zA-Z]+$/', $_POST['rl']);
		 if ($eRole==true) {
		 $employeeRole = $_POST['rl'];
		 }
		 else{
<<<<<<< HEAD
		      echo "Id pattern is wrong. Only letters <br>";
=======
		      echo "Role pattern is wrong. Only letters <br>";
>>>>>>> nanjala
		     }
	}
	else{
		echo "Role is required";
<<<<<<< HEAD
	}		
=======
	}	



	///add employee
		if (isset($_POST['username']) && !empty($_POST['username'])){
		 $eRole=preg_match('/^[a-zA-Z]+$/', $_POST['username']);
		 if ($eRole==true) {
		 $username = $_POST['username'];
		 }
		 else{
		      echo "Username pattern is wrong. Only letters <br>";
		     }
	}
	else{
		echo "Username is required";
	}


	if (isset($_POST['mail']) && !empty($_POST['mail'])){
		 $email = $_POST['mail'];
	}
	else{
		echo "Email is required";
	}

	if (isset($_POST['password']) && !empty($_POST['password'])){
		 $pass = $_POST['password'];
	}
	else{
		echo "password is required";
	}

>>>>>>> nanjala
}

/*
*function to add information to the database
*/
function addEmployee(){

	$employeeId=$_REQUEST['id'];
	$employeeFname=$_REQUEST['fname'];
	$employeeLname=$_REQUEST['lname'];
	$employeeGender=$_REQUEST['gender'];
	$employeeEdate=$_REQUEST['edate'];
	$employeeRole=$_REQUEST['rl'];
	$employeeContact=$_REQUEST['cnumber'];

$testEmployee = new EmplyeeManagement;
$testEmployee->setId($employeeId);
$testEmployee->setFname($employeeFname);
$testEmployee->setLname($employeeLname);
$testEmployee->setGender($employeeGender);
$testEmployee->setEmploymentDate($employeeEdate);
$testEmployee->setRole($employeeRole);
$testEmployee->setContactNumber($employeeContact);
$testEmployee->addEmployee();
}



/*
*function to delete information to the database
*/
function deleteEmployee(){
	$testEmployee = new EmplyeeManagement;
	$testEmployee->deleteEmployee();
}

/*
*function to update information to the database
*/
function updateEmployee(){
	$employeeId = (int)($_GET['update']);

	$employeeFname=$_REQUEST['fname'];
	$employeeLname=$_REQUEST['lname'];
	$employeeGender=$_REQUEST['gender'];
	$employeeEdate=$_REQUEST['edate'];
	$employeeRole=$_REQUEST['rl'];
	$employeeContact=$_REQUEST['cnumber'];

$testEmployee = new EmplyeeManagement;
$testEmployee->setFname($employeeFname);
$testEmployee->setLname($employeeLname);
$testEmployee->setGender($employeeGender);
$testEmployee->setEmploymentDate($employeeEdate);
$testEmployee->setRole($employeeRole);
$testEmployee->setContactNumber($employeeContact);
$testEmployee->updateEmployee($employeeId);
}

function loadEmployeeeInfo(){
	$testEmployee = new EmplyeeManagement;
	$testEmployee->loadinfo();
}
<<<<<<< HEAD
=======

function addAdmin(){
	$username=$_REQUEST['username'];
	$email=$_REQUEST['mail'];
	$pass=$_REQUEST['password'];
	$hash=password_hash($pass, PASSWORD_DEFAULT);

	$testEmployee = new EmplyeeManagement;

	$testEmployee->setUserName($username);
	$testEmployee->setMail($email);
	$testEmployee->setPass($hash);
	$testEmployee->admin();
}
>>>>>>> nanjala
?>