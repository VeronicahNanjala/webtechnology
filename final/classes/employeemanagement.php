<?php 
/*
*  This class helps the admin to add,delete and update emplyees information 
*/

/**
* @author Veronicah Nanjala
*/
<<<<<<< HEAD
class EmplyoyeeManagement
=======
class ClassName extends AnotherClass
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
{
	private $firstname;
	private $lastname;
	private $employeeid;
	private $employmentdate;
	private $gender;
	private $contactnumber;
	private $role;

<<<<<<< HEAD

=======
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
	function __construct()
	{
		# code...
	}

/*
*Set the id of the employee 
*/
<<<<<<< HEAD
    /**
     * @param $id
     */
=======
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
public function setId($id){
$this->employeeid=$id;
}

/*
* return the id of the emplyee 
* @return return employeeId
*/
public function getId(){
<<<<<<< HEAD
return $this->employeeid;
=======
return $this->employeeId;
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
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
<<<<<<< HEAD
$this->role=$rl;
=======
$this->role=$rl
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
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
<<<<<<< HEAD
$this->contactnumber=$contact;
=======
$this->contactnumber=$contact
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
}

/*
*
*/
public function getContactNumber(){
return $this->contactnumber;
}

<<<<<<< HEAD
    /**
     *Adding employee to the database
     */
    public function addEmployee(){
    require_once("../database/dbclass.php");
=======


/*
*The following methods interact with the datacbase using information from the above set and get methods 
*/

/*
*Adding employee to the database
*/
public function addEmployee(){
// require once db connection
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
	$sql="INSERT INTO Employee empID=?,firts_name=?,last_name=?,employmentDate=?,gender=?,contact_no=?,role=?";

	$stmt = $dbconn->prepare($sql);

	$id=$this->employeeid;
	$fname=$this->firstname;
<<<<<<< HEAD
	$lname=$this->lastname;
=======
	$laname=$this->lastname;
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
	$edate=$this->employmentdate;
	$gen=$this->gender;
	$contact=$this->contactnumber;
	$rl=$this->role;

<<<<<<< HEAD
	$stmt->bind_param('i','s','s','s','s','i','s', $id,$fname,$lname,$edate,$gen,$contact,$rl);
=======
	$stmt->bind_param('i','s','s','s','s','i','s', $id,$fname,$lname,$edate,$gender,$contact,$rl);
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
	$stmt->execute(); 
    $stmt->close(); 
}

/*
*Deleting empployee from the database
*/
public function deleteEmployee(){
<<<<<<< HEAD
require_once("../database/dbclass.php");
=======
// require once db connection
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
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
<<<<<<< HEAD
require_once("../database/dbclass.php");
=======
// require once db connection
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870

	$id=$this->employeeid;
	$sql="UPDATE Employee SET firts_name=?,last_name=?,employmentDate=?,gender=?,contact_no=?,role=? WHERE empID='$id'";

	$stmt = $dbconn->prepare($sql);

	$fname=$this->firstname;
<<<<<<< HEAD
	$lname=$this->lastname;
=======
	$laname=$this->lastname;
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
	$edate=$this->employmentdate;
	$gen=$this->gender;
	$contact=$this->contactnumber;
	$rl=$this->role;

<<<<<<< HEAD
	$stmt->bind_param('i','s','s','s','s','i','s', $id,$fname,$lname,$edate,$gen,$contact,$rl);
=======
	$stmt->bind_param('i','s','s','s','s','i','s', $id,$fname,$lname,$edate,$gender,$contact,$rl);
>>>>>>> 0852760d4beb3080a9f3e5457c744d64b9939870
	$stmt->execute(); 
    $stmt->close();
}
}
?>