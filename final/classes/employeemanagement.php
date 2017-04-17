<?php 
/*
*  This class helps the admin to add,delete and update emplyees information 
*/

/**
* @author Veronicah Nanjala
*/
class ClassName extends AnotherClass
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
public function setId($id){
$this->employeeid=$id;
}

/*
* return the id of the emplyee 
* @return return employeeId
*/
public function getId(){
return $this->employeeId;
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
$this->role=$rl
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
$this->contactnumber=$contact
}

/*
*
*/
public function getContactNumber(){
return $this->contactnumber;
}



/*
*The following methods interact with the datacbase using information from the above set and get methods 
*/

/*
*Adding employee to the database
*/
public function addEmployee(){
// require once db connection
	$sql="INSERT INTO Employee empID=?,firts_name=?,last_name=?,employmentDate=?,gender=?,contact_no=?,role=?";

	$stmt = $dbconn->prepare($sql);

	$id=$this->employeeid;
	$fname=$this->firstname;
	$laname=$this->lastname;
	$edate=$this->employmentdate;
	$gen=$this->gender;
	$contact=$this->contactnumber;
	$rl=$this->role;

	$stmt->bind_param('i','s','s','s','s','i','s', $id,$fname,$lname,$edate,$gender,$contact,$rl);
	$stmt->execute(); 
    $stmt->close(); 
}

/*
*Deleting empployee from the database
*/
public function deleteEmployee(){
// require once db connection
	$id=$this->employeeid;
	$sql="DELETE FROM Employee WHERE WHERE empID='$id'";

	$stmt = $dbconn->prepare($sql);

	$stmt->bind_param('i', $id);
	$stmt->execute(); 
    $stmt->close();
}

/*
*Updating an emplyee in the database
*/
public function updateEmployee(){
// require once db connection

	$id=$this->employeeid;
	$sql="UPDATE Employee SET firts_name=?,last_name=?,employmentDate=?,gender=?,contact_no=?,role=? WHERE empID='$id'";

	$stmt = $dbconn->prepare($sql);

	$fname=$this->firstname;
	$laname=$this->lastname;
	$edate=$this->employmentdate;
	$gen=$this->gender;
	$contact=$this->contactnumber;
	$rl=$this->role;

	$stmt->bind_param('i','s','s','s','s','i','s', $id,$fname,$lname,$edate,$gender,$contact,$rl);
	$stmt->execute(); 
    $stmt->close();
}
}
?>