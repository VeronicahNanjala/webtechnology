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
		$this->connect=new mysqli($hostname, $dname,$uname,$pwd);
		
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
		if(!$this->connect()){
			return false;
		}
		else{
			$this->result=mysqli_query($this->connect,$sql);
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
			mysqli_fetch_assoc($this->result);
		}
		
	}
	/*prevent sql injection using prevent injection method
	*@return return true or false
	*/
	public function preventsqlInj($sql){
		
	}
	/*prepare statement function
	*@return return true or false
	*/
	public function prepStatement(){
		
	}
}
?>