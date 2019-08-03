<?php
	require_once'keys.php'; 
	
	if(isset($_POST['register'])){
		try{
			#Establishing a database connection via PDO
			$db_p2ts = new PDO('mysql:host=127.0.0.1;dbname=db_p2ts',$user,$key);
			$db_p2ts->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			#Creating Variables
			$firstName  = trim($_POST['firstName']);
			$lastName   = trim($_POST['lastName']);
			$department = $_POST['department'];
			$gender  	= $_POST['gender'];
			$eMail   	= trim($_POST['eMail']);
			$phone   	= trim($_POST['phone']);
			$passKey 	= md5($_POST['passKey']);
			#Preventing header injections
				htmlspecialchars($firstName, ENT_QUOTES,'UTF-8');
				htmlspecialchars($lastName, ENT_QUOTES,'UTF-8');
				htmlspecialchars($eMail, ENT_QUOTES,'UTF-8');
				htmlspecialchars($phone , ENT_QUOTES,'UTF-8');
				htmlspecialchars($passKey, ENT_QUOTES,'UTF-8');
			//Querying the database - INSERT Query
			$sql = "
				INSERT INTO tblUsers 
					(firstName,lastName,department,gender,e_Mail,phone,passKey) 
				VALUES
					('$firstName','$lastName','$department','$gender','$eMail','$phone','$passKey'); 
				";
			$db_p2ts->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}$db_p2ts = null;
	}
?>