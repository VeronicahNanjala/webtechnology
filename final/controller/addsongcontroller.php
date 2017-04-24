<?php
/**
*@author Bridgett Marufu
*/

require_once('../classes/artist_listenerclass.php');
//require_once('../pages/addsong.php');


if (isset($_POST['addSong'])) {
	//add song
	addSong();
}

elseif (isset($_GET['deleteSong'])) {
	$clear = (int)($_GET['delete']);
	$del = new artist_listenerClass;
	$del -> deleteSong($clear);
	
}
elseif (isset($_POST['updateSong'])) {
	updateSong();
}

function validateAdd(){

	$songnameErr = $genreErr = $artistErr = $labelErr = $dateErr= $albumErr="";
	$songname = $genre = $artistsname = $label = $date = $album="";

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	 {
	 	//VALIDADTE Song NAME
 		if (empty($_POST["songname"]))
 		 {
   	    $songnameErr = "Song name is required";
         }
		else  
		{
    		$songname = test_input($_POST["songname"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$songname))
    		 {

      			$songnameErr = "Only letters and white space allowed"; 
   			 }
   		}


   		//validate genre
   		if (empty($_POST["genre"]))
 		 {
   	    $genreErr = "Genre name is required";
         }
		else  
		{
    		$genre = test_input($_POST["genre"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$genre))
    		 {

      			$genreErr = "Only letters and white space allowed"; 
   			 }
   		}

   		//validate artist
   		if (empty($_POST["artist"]))
 		 {
   	    $artistErr = "artist name is required";
         }
		else  
		{
    		$artist = test_input($_POST["artist"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$artist))
    		 {

      			$artistErr = "Only letters and white space allowed"; 
   			 }
   		}

   		//validate label
   			if (empty($_POST["label"]))
 		 {
   	    $labelErr = "label name is required";
         }
		else  
		{
    		$label = test_input($_POST["label"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$label))
    		 {

      			$labelErr = "Only letters and white space allowed"; 
   			 }
   		}
   		//validate date
   			if (empty($_POST["date"]))
 		 {
   	    $dateErr = "label name is required";
         }
		else  
		{
    		$label = test_input($_POST["date"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$date))
    		 {

      			$dateErr = "Enter correct date format"; 
   			 }
   		}


   		//validate album
   			if (empty($_POST["album"]))
 		 {
   	    $albumErr = "album name is required";
         }
		else  
		{
    		$album = test_input($_POST["album"]);
   			 // check if name only contains letters and whitespace
    		if (!preg_match("/^[a-zA-Z ]*$/",$album))
    		 {

      			$albumErr = "album name required"; 
   			 }
   		}

}

}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


/*
*function to add information to the database
*/
function addSong(){
	// $songId=$_REQUEST['id'];
	$songname=$_REQUEST['songname'];
	$genre=$_REQUEST['genre'];
	$artist=$_REQUEST['artist'];
	$label=$_REQUEST['label'];
	$url=$_REQUEST['url'];
	$album=$_REQUEST['album'];
$test = new artist_listenerClass;
$test->setSongname($songname);
$test->setgenre($genre);
$test->setartist($artist);
$test->setrecord_label($label);
$test->seturl($url);
$test->setalbum($album);
$test->addSong();
}

/*
*function to delete information to the database
*/
function deleteSong(){
	$test = new artist_listenerClass;
	$test->deleteSong();
}

function updateSong(){
	$songId = (int)($_GET['update']);
	$songname=$_REQUEST['songname'];
	$genre=$_REQUEST['genre'];
	$artist=$_REQUEST['artist'];
	$label=$_REQUEST['label'];
	$url=$_REQUEST['url'];
	$album=$_REQUEST['album'];
$test = new artist_listenerClass;
$test->songname($songname);
$test->genre($genre);
$test->artist($artist);
$test->label($label);
$test->url($url);
$test->album($album);
$test->updateSong();
}

?>