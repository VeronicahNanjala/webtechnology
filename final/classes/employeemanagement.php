<?php 
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

	private $usurname;
	private $email;
	private $password;

	function __construct()
	{
		# code...
	}

function setUserName($name){
$this->usurname=$name;
}

function getUsername(){
return $this->usurname;
}

function setMail($mail){
$this->email=$mail;
}

function getMail(){
return $this->email;
}

function setPass($pass){
$this->password=$pass;
}

function getPass(){
return $this->password;
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
*The following methods interact with the datacbase using information from the above set and get methods 
*/

/*
*Adding employee to the database
*/
public function addEmployee(){
	// $conn = new databaseConnection;
$sql="INSERT INTO Employee (empID,first_name,last_name,employmentDate,gender,contact_no,role) VALUES('%d','%s','%s','%s','%s','%d','%s')";
	$id=$this->employeeid;
	$fname=$this->firstname;
	$lname=$this->lastname;
	$edate=$this->employmentdate;
	$gen=$this->gender;
	$contact=$this->contactnumber;
	$rl=$this->role;
$dbconn= new databaseConnection;
$dbconn->sqlInjection($sql,$id,$fname,$lname,$edate,$gen,$contact,$rl);

// $conn=$dbconn->querydb($sql);
if($dbconn){
	echo "Employee added <br>";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));

}

/*
*Deleting empployee from the database
*/
public function deleteEmployee($id){

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
	$dbconn->sqlInjection($sql,$id,$fname,$lname,$edate,$gen,$contact,$rl);

	if($dbconn){
	echo "Updated";
	}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
}
/*
*Load information about emmployee from database
*/

function loadinfo(){
	$id="";
	$sql="SELECT empID,first_name,last_name,employmentDate, gender,contact_no, role FROM Employee";
	$dbconnEmployee= new databaseConnection;
	$conn=$dbconnEmployee->querydb($sql);
		if($conn){
			echo "<table>
					<tr>
						<th>First name</th>
						<th>Last name </th>
						<th>Employment date</th>
						<th>Gender</th>
						<th>Contact No</th>
						<th>Role</th>
					</tr>
				";
				while ($row=$dbconnEmployee->fetchdb()){
					$id=$row['empID'];
				    $fname=$row['first_name'];
					$lname=$row['last_name'];
					$edate=$row['employmentDate'];
					$gen=$row['gender'];
					$cn=$row['contact_no'];
					$rl=$row['role'];

				echo 
				"<tr>
						<td>{$row['first_name']}  </td>
						<td>{$row['last_name']}  </td>
						<td>{$row['employmentDate']}  </td>
						<td>{$row['gender']}  </td>
						<td>{$row['contact_no']}  </td>
						<td>{$row['role']}  </td>

						<td><a href='../pages/updateemployee.php?update={$row['empID']}'>Update</a></td>
						<td><a href='employeePage.php?delete={$row['empID']}'>Delete</a></td>
				</tr>

			";
			  }
			  echo "</table>";
		}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
	}


function retainValuesOnEdit(){
	$id="";
	$sql="SELECT empID,first_name,last_name,employmentDate, gender,contact_no, role FROM Employee";
	$dbconnEmployee= new databaseConnection;
	$conn=$dbconnEmployee->querydb($sql);
		if($conn){
				while ($row=$dbconnEmployee->fetchdb()){
					$id=$row['empID'];
				    $fname=$row['first_name'];
					$lname=$row['last_name'];
					$edate=$row['employmentDate'];
					$gen=$row['gender'];
					$cn=$row['contact_no'];
					$rl=$row['role'];

			 echo
			  "<form> 

				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='fname'>First name:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name= 'fname' value='$fname'>
				      </div>
				  </div>

				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='fname'>Last name:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name= 'lname' value='$lname'>
				      </div>
				  </div>


				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='edate'>Employment Date:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name= 'edate' value='$edate'>
				      </div>
				  </div>

				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='fname'>Gender:</label>
				      <div class='col-lg-8'>
				  		 <input type='radio' name='gender' id='gender' value='M' CHECKED> Male
              			<input type='radio' name='gender' id='gender' value='F'> Female<br>
				      </div>
				  </div>

				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='cnumber'> Contact Number:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name='cnumber' value='$cn'> 
				      </div>
				  </div>

				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='rl'>Role:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name='rl' value='$rl'>
				      </div>
				  </div>	

			<div style='float: right; color: black;''><input type='submit' name='update' value='Update'><br></div>			  
			  </form>";
			  }
		}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
	}


/*
*Adding an admin to the database
*/
public function admin(){
	// $conn = new databaseConnection;
$sql="INSERT INTO admins (email, user_name,password) VALUES('%s','%s','%s')";
	$usename=$this->usurname;
	$mail=$this->email;
	$pass=$this->password;
$dbconn= new databaseConnection;
$dbconn->sqlInjection($sql,$mail,$usename,$pass);

// $conn=$dbconn->querydb($sql);
if($dbconn){
	echo "Admin added <br>";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));

}

}

$testEmployee = new EmplyeeManagement;
//echo $testEmployee->setId(34);
// echo $testEmployee->setFname("Veronicah");
// echo $testEmployee->setLname("Ndutamwangi");
// echo $testEmployee->setGender("M");
// echo $testEmployee->setEmploymentDate("12/12/1994");
// echo $testEmployee->setRole("Major");
// echo $testEmployee->setContactNumber(56787);

//$testEmployee->addEmployee();

//var_dump($testEmployee->addEmployee(1));
//var_dump($testEmployee->deleteEmployee(47));
//var_dump($testEmployee->loadinfo());
?>