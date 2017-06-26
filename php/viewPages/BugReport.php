<html>

<?php
// Get the bug details
$description = $_POST['bugDesc'];
$projectID = $_POST['projectID'];
$currentDate = getDate();


// Log in to the database through my own username password and the local host
$mysql_Host = 'localhost';
$mysql_Username = 'u1355755';
$mysql_Password = '18aug95';
$linkID = mysql_connect($mysql_Host ,$mysql_Username ,$mysql_Password ) or die ('Unable to connect');
mysql_select_db($mysql_Username, $linkID) or die(mysql_error($linkID));


// This will get the final bug in order to add a new bug

$bugQuery = "SELECT MAXIMUM(`bugid`) AS `maximum` FROM `psh_bug`";
$final = mysql_query($bugQuery,$linkID) or die(mysql_error());
$row = mysql_fetch_assoc($final);
$maximum = $row['maximum'];
$bugInc = $maximum + 1;

// This will allow the project id to increase
if ($projectID < 10){

$value = 0;
$project = $value.$projectID;
}

else {

$project = $projectID;
}


//here is the error statement that will kill the program if it cannot connect  
if(! $linkID )
{
  die('Could not connect: ' . mysql_error());
}

else{

// Inserts new bug 
$sqlInsert = "INSERT INTO psh_bug (bugid,projectid,description,date)
		VALUES ('$bugInc','PR00$project','$description','$currentDate')";

	


}
?>







</html>