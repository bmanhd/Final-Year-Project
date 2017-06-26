<?php

class Database {
		
	public $linkID;
	
		
	
	public function __construct(){
	

	}
	
	public function data(){
	
	// Log in to the database 
        $mysql_Host = 'localhost';
        $mysql_Username = 'u1355755';
        $mysql_Password = '18aug95';
        $linkID = mysql_connect($mysql_Host, $mysql_Username, $mysql_Password) or die('Unable to connect to the database');
        mysql_select_db($mysql_Username, $linkID) or die(mysql_error($linkID));
		
		return $linkID;
	}
		
 }       
        
        ?>