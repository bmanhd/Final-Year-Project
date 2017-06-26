<?php
// Log in to the database through my own username password and the local host
$mysql_Host = 'localhost';
$mysql_Username = 'u1355755';
$mysql_Password = '18aug95';
$linkID = mysql_connect($mysql_Host ,$mysql_Username ,$mysql_Password ) or die ('Unable to connect to database');
mysql_select_db($mysql_Username, $linkID) or die(mysql_error($linkID));

// Retrieve the username and password from the previous form
$user = $_POST['User'];
$pass = $_POST['Pass'];

// This will check that the username and password are there
if ($user&&$pass){

// Retrieves entered email address/username from database
$getUser = ("SELECT * FROM psh_user WHERE email = '$user'");
$resultID = mysql_query($getUser, $linkID) or die(mysql_error($linkID));



// Retrieves userID
while ($row = mysql_fetch_assoc($resultID)) {
    
	$userID = $row["userid"];
   
}


// Retrieves userID's from database
$getPass = ("SELECT * FROM psh_subscriber WHERE userid = '$userID'");
$resultPass = mysql_query($getPass, $linkID) or die(mysql_error($linkID));

// Retrieves the password
while ($row = mysql_fetch_assoc($resultPass)) {
    $actualPass = $row["pass"];
   
}
// Checks if the entered password matches the expected password
if ($pass==$actualPass){

$checkDev = ("SELECT * FROM psh_developer WHERE userid = '$userID'");
$finalDev = mysql_query($checkDev, $linkID) or die(mysql_error($linkID));
$checkNonDev = ("SELECT * FROM psh_nondeveloper WHERE userid = '$userID'");
$finaNonDev = mysql_query($checkNonDev, $linkID) or die(mysql_error($linkID));

$numDeveloper = mysql_num_rows($finalDev);
$numNonDeveloper = mysql_num_rows($finalNonDev);

if ($numDeveloper=1){
//You will be forwarded to the user developer page
header("Location:Developer.php");
exit();
}
else if ($numNonDeveloper=1){
//Forwards to non developer page
header("Location:NonDeveloper.php");
exit();
}








}
else
	echo ("the Username and Password are incorrect");




}

else 

echo('Your username or password is correct, Please try again')









?>