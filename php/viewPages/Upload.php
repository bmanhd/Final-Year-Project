<?php

if (isset($_FILES['file'])){
	$file = $_FILES['file'];
	
	
	// File Properties
	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	
	 $fileLocation = 'uploads/' . $file_name;
	
		if (move_uploaded_file($file_tmp, $fileLocation)){
		
			echo "File Upload was successful";
		}
		
		else {
		  echo "File upload was unsuccessful";
		}
		
		if(isset($_POST['Return'])){
		header("Location:Developer.php");
		exit();
		}
		
		
		
}



?>

<html>
<form action='Developer.php' method ='POST'>
<input type='submit' value='Return' name='Return'>
</form>



</html>