<?php 
/*
*  This class helps the admin to add,delete and update emplyees information 
*/

/**
* @author Veronicah Nanjala
*/
require_once("../database/dbclass.php");
class EmplyeeManagement extends databaseConnection
{
	private $firstname;
	private $lastname;
	private $employeeid;
	private $employmentdate;
	private $gender;
	private $contactnumber;
	private $role;

	function __construct()
	{
		# code...
	}

/*
*Set the id of the employee 
*/

    /**
     * @param $id
     */

public function setId($id){
$this->employeeid=$id;
}

/*
* return the id of the emplyee 
* @return return employeeId
*/
public function getId(){
return $this->employeeid;
}

/*
* Set first name of the employee
*/
public function setFname($fname){
$this->firstname=$fname;
}

/*
* return first name of the employee
*/
public function getFname(){
return $this->firstname;
}

/*
*Set employee's last name 
*/
public function setLname($lname){
$this->lastname=$lname;
}

/*
* Return employee's last name
*/
public function getLname(){
return $this->lastname;
}

/*
* Set employee's gender
*/
public function setGender($gen){
$this->gender=$gen;
}

/*
* Return employee's gender
*/
public function getGender(){
return $this->gender;
}

/*
*           
*/
public function setEmploymentDate($date){
$this->employmentdate=$date;
}

/*
*
*/
public function getEmploymentDate(){
return $this->employmentdate;
}

/*
*
*/
public function setRole($rl){
$this->role=$rl;
}

/*
*
*/
public function getRole(){
return $this->role;
}

/*
*
*/
public function setContactNumber($contact){
$this->contactnumber=$contact;
}

/*
*
*/
public function getContactNumber(){
return $this->contactnumber;
}

/*
*Load information about emmployee from database
*/

function loadinfo($id){
	
	$sql="SELECT * FROM Employee WHERE empID='$id'";
	$dbconnEmployee= new databaseConnection;
	$conn=$dbconnEmployee->querydb($sql);
		if($conn){
				while ($row=$dbconnEmployee->fetchdb()){
				echo $row['empID'];
				echo $row['first_name'];
				echo $row['last_name'];
				echo $row['employmentDate'];
				echo $row['gender'];
				echo $row['contact_no'];
				echo $row['role'];
			  }
		}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
	}

/*
*The following methods interact with the datacbase using information from the above set and get methods 
*/

/*
*Adding employee to the database
*/
public function addEmployee(){
	$id=$this->employeeid;
	$fname=$this->firstname;
	$lname=$this->lastname;
	$edate=$this->employmentdate;
	$gen=$this->gender;
	$contact=$this->contactnumber;
	$rl=$this->role;
$sql="INSERT INTO Employee (empID,first_name,last_name,employmentDate,gender,contact_no,role) VALUES('$id',
	  '$fname','$lname','$edate','$gen','$contact','$rl')";
$dbconn= new databaseConnection;
$conn=$dbconn->querydb($sql);
if($conn){
	echo "Employee added <br>";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));

}

/*
*Deleting empployee from the database
*/
public function deleteEmployee($id){
// require once db connection
	$sql="DELETE FROM Employee WHERE empID='$id'";
	$dbconn= new databaseConnection;
	$conn=$dbconn->querydb($sql);
	if($conn){
	echo "Deleted";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
}

/*
*Updating an emplyee in the database
*/
public function updateEmployee($id){
	$fname=$this->firstname;
	$fname=$this->firstname;
	$lname=$this->lastname;
	$edate=$this->employmentdate;
	$gen=$this->gender;
	$contact=$this->contactnumber;
	$rl=$this->role;
	$sql="UPDATE Employee SET first_name='$fname',last_name='$lname',employmentDate='$edate',gender='$gen',contact_no='$contact',role='$rl'WHERE empID='$id'";
	$dbconn= new databaseConnection;
	$conn=$dbconn->querydb($sql);
	if($conn){
	echo "Updated";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));

}
}

$testEmployee = new EmplyeeManagement;
// echo $testEmployee->setId(34);
// echo $testEmployee->setFname("Veronicah");
// echo $testEmployee->setLname("Ndutamwangi");
// echo $testEmployee->setGender("M");
// echo $testEmployee->setEmploymentDate("12/12/1994");
// echo $testEmployee->setRole("Major");
// echo $testEmployee->setContactNumber(56787);

//$testEmployee->addEmployee();

//var_dump($testEmployee->addEmployee(1));
//var_dump($testEmployee->deleteEmployee(47));
var_dump($testEmployee->loadinfo(34));

?>