<?php
	define('TITLE','About Us');
	define('DESC_PAGE',"Say something bout the search page");
	include('../assets/scripts/php/script_00.php');
	require_once'../connect/ses_mgr/ses_stop.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<?php include'../assets/scripts/php/level_02/pg_defaults.php'; ?>
	</head>
	<body>
		<?php include'../assets/scripts/php/level_02/pg_header-A.php'; ?>
		<div id='site_nav'>
			<div id='fix_nav'>
				<?php include'../assets/scripts/php/level_02/pub_about/nav_about.php'; ?>
			</div>
			<div style='clear:both'></div>
		</div>
		<div style='clear:both'></div>
		<div id='site_body'>
			<?php include'../assets/scripts/php/level_02/pub_about/body_about.php'; ?>
		</div>
		<div style='clear:both'></div>
		<?php include'../assets/scripts/php/level_02/pg_footer-A.php'; ?>
	</body>
</html>