<?php

include_once("model + database/Model.php");
include_once ("model + database/Database.php");



class Controller {
    


public function __construct() {
            
    $this->model = new Model();
	
	
	
    }

// Go to homepage	
public function invoke(){
        
        
        include 'viewPages/Home.php';
        
    }



// Login	

public function login($user, $pass) {


if ($this->model -> login($user, $pass)){

	if ($this->model -> developer()){
	include 'viewPages/Developer.php';
}
	else {
	include 'viewPages/NonDeveloper.php';
}
}
else {
$this -> invoke();
echo ("Incorrect Username or Password");
}
}

public function upload($file){

$this->model->upload($file);

}

public function bug($description, $projectID,$currentDate){

$this->model->bug($description, $projectID,$currentDate);

}

public function viewBug($bugProject){


$this->model->viewBug($bugProject);

}


public function guest(){

include 'viewPages/Guest.php';

}

public function register(){

include 'viewPages/Register.php';

}

public function download(){

include 'viewPages/Download.php';

}


public function login(){



}


	





}







?>


    
        