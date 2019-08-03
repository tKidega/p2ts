<?php
	$login_err = '<h2 class="txtDesc">Invalid eMail and Password combination</h2>';
	$login_standby = '<a class="intLink" href="content/pages/t&c.php" title="click to view Terms and Conditions"><h2 class="txtDesc">Terms and Conditions</h2></a>';
	if(isset($_POST['login_access'])){
		print $login_err;
	}else{
		print $login_standby;
	}
?>