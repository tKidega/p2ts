<?php
	require_once'../input/keys.php'; 
	$connection = new mysqli('localhost',$user,$pass,'db_p2ts');
	if($connection->connect_error){
		die('Database Connection failed' . $connection->connect_error);
	}
	echo'';
	#To insert data into the database
	#$sql = 'Insert into tblUsers(firstName,lastName,department,dptNumber,gender,eMail,phone,password) values("Kidega","Timothy","ICT","ICT-001","Male","timothykidega@gmail.com",+256-774-454-848,"Welcome@123")';
	#	if($connection->query($sql) == true){
	#		echo'Data inserted successfully';
	#	}else{
	#		echo $connection->error;
	#	}
	$connection->close();
?>