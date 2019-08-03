<?php
	if(!isset($_SESSION)){
		session_start();
	}
	#Defining a memebers only zone
	$login_msg = 'Session ID &rarr; ' . ' ' . $_SESSION['e_mail'];
	if($_SESSION['e_mail'] == NULL){
		#Re-directs the user to the login page
		header('location: ../');
	}else{
		return $login_msg;
	}
?>