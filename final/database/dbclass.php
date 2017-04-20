<?php 
/*
*@author Tito Lulu Magero
*database class detailing database actions
*/
require_once('databaseconnection.php');

class databaseConnection{
	public $connect;
	public $result;
	
	/*establish connection
	*using connection method
	*@return return true or false
	*/
	public function connect2db(){
		$this->connect=mysqli_connect(DBHOST,DBUSERNAME,DBPASSWORD,DBNAME);
		
		if(mysqli_connect_errno()){
			return false;
		}
		else{
			return true;
		}
		
	}
	/* allow querying using query method
	*@return return true or false
	*/
	public function querydb($sql){
		if(!$this->connect2db()){
			return false;
		}
		else{
			$this->result=mysqli_query($this->connect, $sql);
		}
		//check records returned
		if($this->result ==false){
			return false;
			
		}else{
			return true;
		}
	}
	/*fetch data in database using fetch method
	*@return return true or false
	*/
	public function fetchdb(){
		if($this->result==false){
			return false;
		}
		else{
			return mysqli_fetch_assoc($this->result);
		}
		
	}
	/*prevent sql injection using prevent injection method
	*@return return true or false
	*/
function sqlInjection($sql, ...$array){

	  // check whether connection works
	  if(!$this->connect2db())
	  {
	   return false;
	  }
	  
	  $variables = array();
	  foreach ($array as $value) 
	  {
	   $variables[]=mysqli_real_escape_string($this->connect, $value);
	  }
	  $sqlStatements=vsprintf($sql,$variables);
	  $queryStatement=$this->querydb($sqlStatements);
	  return $queryStatement;
 }
}
?>