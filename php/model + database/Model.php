<?php

include_once ("models/Database.php");


class Model {

public $userID;

public function __construct(){

		$this->ref = new Database();
        $this->link = $this->ref->data();
	
		
}


// The login model

public function login($user,$pass){

//if statement that will check if the username and password are there
if ($user && $pass) {

// Retrieves entered email address from database
$getUser = ("SELECT * FROM psh_user WHERE email = '$user'");
$finalID = mysql_query($getUser, $this->link) or die(mysql_error($this->link));



// Retrieves corresponding user id
while ($row = mysql_fetch_assoc($finalID)) {

global $userID;
$userID = $row["userid"];
}


// Retrieves userID's from database
$getPass = ("SELECT * FROM psh_subscriber WHERE userid = '$userID'");
$finalPass = mysql_query($getPass, $this->link) or die(mysql_error($this->link));

// Retrieves the corresponding password
while ($row = mysql_fetch_assoc($finalPass)) {
$actualPass = $row["password"];
}
// Checks if the entered password matches the expected

if ($pass == $actualPass) {

return true;
}
else
{
return false;
}
}
}

// Checks if the user is a developer
function developer(){

global $userID;

$developer = mysql_query("SELECT * FROM psh_developer WHERE userid = '$userID'");
if(mysql_num_rows($developer) == 0) {
     return false;
} else {
    return true;
}



}

// Carries out the upload function 
function upload($file){

	
	// File Properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	
	 $fileLocation = '/uploads/' . $file_name;
	
		if (move_uploaded_file($file_tmp, $fileLocation)){
		
			echo "File was successful";
		}
		
		else {
		
		  echo "File Upload was Unsuccessful";
		}


}

function bug ($description, $projectID,$currentDate){
global $userID;
// Gets the last bug id in the table in order to increment a new bug

$bugQuery = "SELECT MAX(`bugID`) AS `maximum` FROM `psh_bug`";
$final = mysql_query($bugQuery,$this->link) or die(mysql_error($this->link));
$row = mysql_fetch_assoc($final);
$maximum = $row['maximum'];
$bugInc = $maximum + 1;

// Allows the project id to be incremented
if ($projectID < 10){

$value = 0;
$project = $value.$projectID;
}

else {

$project = $projectID;
}



if(! $this->link )
{
  die('Could not connect: ' . mysql_error());
}

else{

// Inserts new bug record
$sql_Insert = "INSERT INTO psh_bug (bugid,projectid,description,date)
		VALUES ('$bugInc','PR00$project','$description','$currentDate')";
mysql_query($sql_Insert,$this->link);

}
}

// View bug info. corresponding to project	
		
function viewBug($bugProject){


 //Allows the project id to be incremented
if ($bugProject < 10){

$value = 0;
$project = $value.$bugProject;
}

else {

$project = $bugProject;
}

$view = ("SELECT bugid,description,date FROM psh_bug WHERE projectid = 'PR00$project'");
$viewResult = mysql_query($view, $this->link) or die(mysql_error($this->link));
echo "For the project PR00$project"."<br>"."<br>";
while($row = mysql_fetch_assoc($viewResult)){
    foreach($row as $cname => $cvalue){
		
        echo "$cname: $cvalue"."<br>";
    }
    echo "\r\n"."<br>"."<br>";
}

}

function download(){


}
}









		


	
		













