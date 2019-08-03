<?php
	require_once'../input/keys.php'; 
	try{
		$connection = new PDO('mysql:host=127.0.0.1;dbname=db_p2ts',$user,$pass);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo' ';#Message to output when connected
	}catch(PDOException $e){
		echo $e->getMessage();
	}$connection = null;#Closes the database connection
?>