<div id='login_opt'>
	<?php include'_config/sec_header.php'; ?>
	<?php
		$status = '<h2 class="main3Title">You cannot login</h2>';
		if($login_access != true){
			print $status;
			exit();
		}
	?>
	<?php include'_config/frm_login.php'; ?>
	<?php include'_config/ass_login.php'; ?>
	<?php include'_config/foot_login.php'; ?>
</div>
<div style='clear:both'></div>