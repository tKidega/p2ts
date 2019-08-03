<?php
	$my_form = array(
		
	);
?>
<div id='login_form'>
	<h2 class='txtDesc'>Provide a registered eMail and password below</h2>
	<form action='<?php echo $_SERVER['PHP_SELF']?>' method='POST' >
		<table>
			<tr>
				<td class='opt_name' >
					<h3 class='sub2Title'>e-Mail</h3>
				</td>
				<td class='opt_value' >
					<input type='email' autofocus required 
					placeholder='123@abc.com' name='e_mail'/>
				</td>
			</tr>
			<tr>
				<td class='opt_name' >
					<h3 class='sub2Title'>password</h3>
				</td>
				<td class='opt_value' >
					<input type='password' required name='password'
					placeholder='Welcome@127.0.0.1' />
				</td>
			</tr>
		</table>
		<div id='frm_submit'>
			<input type='submit' value='login' name='login_access' />
		</div>
		<div style='clear:both'></div>
		<div id='login_err'>
			<?php require'_config/err_msg.php'; ?>
		</div>
		<div style='clear:both'></div>
	</form>
	<?php require_once'content/connect/login_mgr/login.php'; ?>
</div>
<div style='clear:both'></div>