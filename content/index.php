<?php
	define('TITLE','Home Page - Private');
	define('DESC_PAGE',"Say something bout the private home page");
	include('assets/scripts/php/script_00.php');
	require_once'connect/ses_mgr/ses_stat.php';
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<?php include'assets/scripts/php/level_01/pg_defaults.php'; ?>
	</head>
	<body>
		<?php include'assets/scripts/php/level_01/pg_header.php'; ?>
		<div id='site_nav'>
			<div id='fix_nav'>
				<?php include'assets/scripts/php/level_01/priv_home/nav_home.php'; ?>
			</div>
			<div style='clear:both'></div>
		</div>
		<div style='clear:both'></div>
		<div id='site_body'>
			<?php include'assets/scripts/php/level_01/priv_home/body_home.php'; ?>
		</div>
		<div style='clear:both'></div>
		<?php include'assets/scripts/php/level_01/pg_footer.php'; ?>
	</body>
</html>