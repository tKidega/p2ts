<?php
	require'keys.php'; 
	if(isset($_POST['submit'])){
		try{
			#Establishing a database connection via PDO
			$db_p2ts = new PDO('mysql:host=127.0.0.1;dbname=db_p2ts',$user,$key);
			$db_p2ts->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			#Creating Variables
			$serialNum  = trim($_POST['serialNum']);
			$numPlate   = trim($_POST['numPlate']);
			$issueDate  = trim($_POST['issueDate']);
			$street  	= trim($_POST['street']);
			$district   = trim($_POST['district']);
			$sTime  	= trim($_POST['sTime']);
			$eTime	    = trim($_POST['eTime']);
			$dueAmount	= trim($_POST['dueAmount']);
			$payStatus	= trim($_POST['payStatus']);
			#Checking for header injections
				htmlspecialchars($serialNum, ENT_QUOTES,'UTF-8');
				htmlspecialchars($numPlate, ENT_QUOTES,'UTF-8');
				htmlspecialchars($issueDate, ENT_QUOTES,'UTF-8');
				htmlspecialchars($street, ENT_QUOTES,'UTF-8');
				htmlspecialchars($district, ENT_QUOTES,'UTF-8');
				htmlspecialchars($sTime, ENT_QUOTES,'UTF-8');
				htmlspecialchars($eTime, ENT_QUOTES,'UTF-8');
				htmlspecialchars($dueAmount, ENT_QUOTES,'UTF-8');
				htmlspecialchars($payStatus, ENT_QUOTES,'UTF-8');
			//Querying the database - INSERT Query
			$sql = "
				INSERT INTO tblParkingData 
					(ticketNum,numPlate,transDate,street,district,sTime,eTime,amount,status) 
				VALUES
					('$serialNum','$numPlate','$issueDate','$street','$district','$sTime','$eTime',$dueAmount,'$payStatus'); 
				";
			$db_p2ts->exec($sql);
			echo'';#Output for user
		}catch(PDOException $e){
			echo $e->getMessage();
		}$db_p2ts = null;
	}
?>