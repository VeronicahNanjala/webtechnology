<?php
/* 
/*@ author Bridgett Marufu and Loltolo Petro Lesapiti.
*/
require_once('../database/dbclass.php');
class artist_listenerClass extends databaseConnection{
//Properties
	private $songid;
	private $songName;
	private $genre;
	private $artist;
	private $record_label;
	private $url;
	private $album;



/**
*Set the id of the song
*/
public function setId($id){
$this->songid=$id;
}

/*
* return the id of the song 
* @return return songId
*/
public function getId(){
return $this->songid;
}

/*
* Set name of the song
*/
public function setsongName($songName){
$this->songName=$songName;
}

/*
* return name of the song
*/
public function getsongName(){
return $this->$songName;
}

/*
*Set genre 
*/
public function setgenre($genre){
$this->genre=$genre;
}

/*
* Return genre
*/
public function getgenre(){
return $this->genre;
}

/*
* Set artist
*/
public function setartist($artist){
$this->artist=$artist;
}

/*
* Return artist
*/
public function getartist(){
return $this->artist;
}

/*
*  set record label         
*/
public function setrecord_label($record_label){
$this->record_label=$record_label;
}

/*
*get record label
*/
public function getrecord_label(){
return $this->record_label;
}

/*
*set album
*/
public function setalbum($album){
$this->album=$album;
}
/*
*get album
*/
public function getalbum(){
return $this->album;
}

/*
*set url
*/
public function seturl($url){
 $this->url=$url;
}

/*
*return date
*/
public function geturl(){
 return $this->url;
}


/*
*The following methods interact with the datacbase using information from the above set and get methods 
*/

/*
*Adding songInfo to the database
*/


public function addSong(){

 /*
 A query to enter the music into the database
 */
		$sql="INSERT INTO song (song_name,song_artist,genre,album_name,url,record_label)
		                  VALUES('%s','%s','%s','%s','%s','%s')";

	$song=$this->songName;
	$type=$this->genre;
	$label=$this->record_label;
	$artistName=$this->artist;
	$url=$this->url;
	$album=$this->album;
     
    $dbconn= new databaseConnection;
	$dbconn->sqlInjection($sql,$song,$type,$label,$artistName,$url,$album);

	if($dbconn){
		echo "My told me something";
	echo "Song added <br>";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
}


/**
A method to delete the song from the database
*/

function deleteSong($id){
// Writing a querry to delete the music data
	$sql="DELETE FROM song WHERE songID='$id' ";

	$dbconn= new databaseConnection;
	$conn=$dbconn->querydb($sql);
     
     if($conn){
	echo "Deleted";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));

}
/**
A method to update music
*/
function updateSong($id){
 
    $song=$this->songName;
	$type=$this->genre;
	$label=$this->record_label;
	$artistName=$this->artist;
	$url=$this->url;
	$album=$this->album;
	
	$sql="UPDATE song SET song_name=$song, song_artist=$type, genre=$label, album_name=$artistName,url=$url,record_label=? WHERE songID='$id' ";

	    $dbconn= new databaseConnection;
	
	$dbconn->sqlInjection($sql,$song,$type,$label,$artistName,$url,$album);

		if($dbconn){
	echo "Song updated <br>";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));

}


function search($item){
	/*
	/*Query to search the song by name, record label, artist name and genre
	*/
	$sql="SELECT * FROM song WHERE song_name LIKE '%$item%'OR song_artist LIKE '%$item%'  OR genre LIKE '%$item%' OR album_name LIKE '%$item%' OR record_label LIKE '%$item%' ";


	$dbconn= new databaseConnection;
	$conn=$dbconn->querydb($sql,$item);
     
   if($conn){
	echo "Search results available";
}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));

}

function loadinfo(){
	$id="";
	$sql="SELECT songID,song_name,song_artist,genre, album_name,url, record_label FROM song";
	$dbconnSong= new databaseConnection;
	$conn=$dbconnSong->querydb($sql);
		if($conn){
			echo "<table>
					<tr>
						<th>Song ID</th>
						<th>Song name </th>
						<th>Song artist_listenerClass</th>
						<th>Genre</th>
						<th>Album name</th>
						<th>URL</th>
						<th>Record label</th>
					</tr>
				";
				while ($row=$dbconnSong->fetchdb()){
					$id=$row['songID'];
				    $songname=$row['song_name'];
					$songartist=$row['song_artist'];
					$genre=$row['genre'];
					$album=$row['album_name'];
					$url=$row['url'];
					$label=$row['record_label'];
					
				echo 
				"<tr>
						<td>{$row['song_name']}  </td>
						<td>{$row['song_artist']}  </td>
						<td>{$row['genre']}  </td>
						<td>{$row['album_name']}  </td>
						<td>{$row['url']}  </td>
						<td>{$row['record_label']}  </td>
						<td><a href='../pages/updatesong.php?update={$row['songID']}'>Update</a></td>
						<td><a href='songpage.php?delete={$row['songID']}'>Delete</a></td>
				</tr>
			";
			  }
			  echo "</table>";
		}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
	}


function retainValuesOnEdit(){
	$id="";
	$sql="SELECT songID,song_name,song_artist,genre, album_name,url, record_label FROM song";;
	$dbconnSong= new databaseConnection;
	$conn=$dbconnSong->querydb($sql);
		if($conn){
				while ($row=$dbconnSong->fetchdb()){
					$id=$row['songID'];
				    $songname=$row['song_name'];
					$songartist=$row['song_artist'];
					$genre=$row['genre'];
					$album=$row['album_name'];
					$url=$row['url'];
					$label=$row['record_label'];
				}
			 echo
			  "<form> 
				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='songname'>Song name:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name= 'songname' value='$songname'>
				      </div>
				  </div>
				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='song_artist'>Song artist:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name= 'song_artist' value='$songartist'>
				      </div>
				  </div>
				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='genre'>Genre:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name= 'genre' value='$genre'>
				      </div>
				  </div>
				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='album_name'>Album name:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name='gender' value='$album'> 
              			
				      </div>
				  </div>
				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='url'>  URL:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name='url' value='$url'> 
				      </div>
				  </div>
				 <div class='form-group'>
				    <label class='control-label col-sm-3' for='record_label'>Record label:</label>
				      <div class='col-lg-8'>
				  		 <input type='text' class='form-control' name='record_label' value='$label'>
				      </div>
				  </div>	
			<div style='float: right; color: black;''><input type='submit' name='update' value='Update'><br></div>			  
			  </form>";
			  //}
		}else trigger_error("Query Failed! SQL: $sql - Error: ". mysqli_error($dbconn->connect));
	}
}


$test = new artist_listenerClass;
// $test->setId(2);
$test->setsongName("mama");
$test->setgenre("afro pop");
$test->Setartist("Diamond");
$test->setrecord_label("label");
$test->setalbum("album");
$test->seturl("23/04/2017");

//var_dump($test->addSong());
?>