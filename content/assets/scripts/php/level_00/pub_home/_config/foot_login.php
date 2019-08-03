<div id='login_foot'>
<?php
	$msg_err = array(
		'<h2 class="mainTitle">copyright &copy; P2TS</h2>',
		'<h2 class="mainTitle">copyright &copy; P2TS</h2>'
	);
	if(isset($_POST['login_access'])){
		print $msg_err[0];
	}else{
		print $msg_err[1];
	}
?>
</div>
<div style='clear:both'></div>