<!-- Ngoma - Team Project
   Group members: Benedicta Amo Bempah, Tito Magero, Veronicah Nanjala, Loltolo Petro Lesapiti
   Web Technologies 
   Task 2.1 - Web Tech: Client Side / Front End Programming

   Author: Veronicah Nanjala
-->
<?php 

/*
*Start sessions 
*/
session_start();

/*
*Destroy sessions 
*/
session_destroy();

session_unset();

header("location:../index.php")
?>