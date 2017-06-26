<?php

require_once ('controllers/login_controller.php');
require_once ('model + database/Model.php');


$controller = new Controller();

// Developer Forms

//Login form
if(isset($_POST['Login'])){

$user = $_POST['user'];
$pass = $_POST['pass'];

$controller->login($user,$pass);
}

// Downloads

else if (isset($_POST['Download'])){

$controller->download();
}

//Upload
else if (isset($_POST['upload'])){

if (isset($_FILES['file'])){
	$file = $_FILES['file'];
	
$controller -> upload($file);
}
}
// File bug report
else if (isset($_POST['bug'])){

$description = $_POST['bugDesc'];
$projectID = $_POST['projectID'];
$currentDate = getdate();
$controller -> bug($description, $projectID,$currentDate);

}

// View bug report

else if (isset($_POST['viewBug'])){
$bugProject = $_POST['bugProject'];

$controller -> viewbug($bugProject);
}





// Non Developer Forms


// Downloads
else if (isset($_POST['DownloadN'])){

$controller->download();
}


// File bug report
else if (isset($_POST['bugN'])){

$description = $_POST['bugDesc'];
$projectID = $_POST['projectID'];
$currentDate = getdate();
$controller -> bug($description, $projectID,$currentDate);

}
// View bug report

else if (isset($_POST['viewbugN'])){
$bugProject = $_POST['bugProject'];

$controller -> viewbug($bugProject);
}


// Guest Forms

else if (isset($_POST['Guest'])){

$controller->guest();
}

else if (isset($_POST['DownloadG'])){

$controller->download();
}

// Register form

else if (isset($_POST['Register'])){

$controller->register();
}

else if (isset($_POST['Logout'])){

$controller -> invoke();
}

else {

$controller -> invoke();

}





      
   
  

    
    
