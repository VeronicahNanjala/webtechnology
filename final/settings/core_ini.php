<?php 
session_start();

function verifylogin(){
    if (isset($_SESSION['username'])&& !empty($_SESSION['username'])){
        //$userid=$_SESSION['userid'];
        //valid user
        //check for user permission
    }else{
        //not valid
        header('location:index.php');
    }
}

function getuserheader(){
    //check user permission
    if ($_SESSION['perid']==1){
        //include the right header
        require_once $_SERVER['DOCUMENT_ROOT']."/classproject2017/layout/standardlayout.php";
        //require_once('../layout/standardlayout.php');
        
    }else if($_SESSION['perid']==2){
        // include the right header
       require_once $_SERVER['DOCUMENT_ROOT']."/classproject2017/layout/adminheader.php";
       // require_once('../layout/adminheader.php');
    }
}
?>