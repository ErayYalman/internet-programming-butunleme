<?php 
    		session_start();
try {	
	$conn = new PDO("mysql:host=localhost;dbname=basketbolveritabani;charset=utf8", 'root', '1234');
			
	} catch (PDOException $e) {
			
		echo "Connection failed: " . $e->getMessage();
  die();
	}

?>