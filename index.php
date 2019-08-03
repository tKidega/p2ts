<?php
	define('TITLE','Home Page - Public');
	define('DESC_PAGE',"Say something bout this page");
	include('content/assets/scripts/php/script_00.php');
	require_once'content/connect/ses_mgr/ses_stop_2.php';
	$login_access = true;
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<?php include'content/assets/scripts/php/level_00/pg_defaults.php'; ?>
	</head>
	<body>
		<?php include'content/assets/scripts/php/level_00/pg_header.php'; ?>
		<div id='site_nav'>
			<div id='fix_nav'>
				<?php include'content/assets/scripts/php/level_00/pub_home/nav_home.php'; ?>
			</div>
			<div style='clear:both'></div>
		</div>
		<div style='clear:both'></div>
		<div id='site_body'>
			<?php include'content/assets/scripts/php/level_00/pub_home/body_home.php'; ?>
		</div>
		<div style='clear:both'></div>
		<?php include'content/assets/scripts/php/level_00/pg_footer.php'; ?>
	</body>
</html>