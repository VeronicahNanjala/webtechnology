<?php
/**
* @author Veronicah Nanjala
* this class validates the entries that the admin enter while registering, deleting or updating an employee
*/
require_once("../classes/employeemanagement.php");

if (isset($_POST['add'])) {
	// register the employee
	addEmployee();

}

elseif (isset($_POST['delete'])) {
	deleteEmployee();
}

elseif (isset($_POST['idUpdate'])) {
	echo "Existing data";
	loadEmployeeeInfo();
}

elseif (isset($_POST['update'])) {
	echo "updating an employee";
	updateEmployee();
}



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




	if (isset($_POST['rl']) && !empty($_POST['rl'])){
		 $eRole=preg_match('/^[a-zA-Z]+$/', $_POST['rl']);
		 if ($eRole==true) {
		 $employeeRole = $_POST['rl'];
		 }
		 else{
		      echo "Id pattern is wrong. Only letters <br>";
		     }
	}
	else{
		echo "Role is required";
	}		
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
	$employeeId=$_REQUEST['id'];

	$testEmployee = new EmplyeeManagement;
	$testEmployee->deleteEmployee($employeeId);
}

/*
*function to update information to the database
*/
function updateEmployee(){
	
}

function loadEmployeeeInfo(){
	$employeeId=$_REQUEST['id'];

	$testEmployee = new EmplyeeManagement;
	$testEmployee->loadinfo($employeeId);
}
?>