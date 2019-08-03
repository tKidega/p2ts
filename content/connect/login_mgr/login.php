<?php
require_once'content/connect/keys/gen.php';
$gate_keeper;
if(!isset($_SESSION)){
	session_start();
}
if(isset($_POST['login_access'])){
	try{
		#Establishing a database connection to db_p2ts via PDO
		$db_p2ts = new PDO('mysql:host=127.0.0.1;dbname=db_p2ts',$user,$key);
		$db_p2ts->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db_p2ts->exec('SET NAMES "UTF8"');
		#Defining login variables and binding to their interfaces
		$user = trim($_POST['e_mail']);
		$pass =  md5($_POST['password']);
		#Checking user input for header injections
			htmlspecialchars($user, ENT_QUOTES,'UTF-8');
			htmlspecialchars($pass, ENT_QUOTES,'UTF-8');
		#Qurying the database to validate user credentials
		$query = $db_p2ts->prepare(
			"SELECT * FROM tblUsers 
			 WHERE e_mail = '$user' && passKey = '$pass'
			");
		$query->execute();
		#Retriving query results
		$row = $query->fetch(PDO::FETCH_NUM);
		#Comparing query results with form data
			if(($row > 0) && ('e_mail' == '$user' && 'passKey' == '$pass')){
				$_SESSION['e_mail'] = $user;
				if('role' == 'IT_Admin'){
					header('location: content/IT_Dashboard.php');
				}else if('role' == 'Admin'){
					header('location: content/admin_dashboard.php');
				}else if('role' == 'Manager'){
					header('location: content/mgr_dashboard.php');
				}else{
					header('location: content/');
				}
			}else{
				$gate_keeper = ' ';#Can display custom error msg to the user
			}
		}catch(PDOException $e){
			$db_err = 'Database error'. $e->getMessage();
		}$db_p2ts = null;
	}
?>