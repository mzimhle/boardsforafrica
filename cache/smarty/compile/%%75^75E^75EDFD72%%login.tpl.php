<?php /* Smarty version 2.6.20, created on 2015-02-05 10:55:53
         compiled from admin/login.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<title>Admin Panel</title>
			<?php echo '			
			<script type="text/javascript">
				$().ready(function() {
					$(\'.top_header_links\').hide();
				});
			</script>
			'; ?>

	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<div class="content">
				<div class="col">
					<form id="loginForm" name="loginForm" method="post" target="" action="login.php">
						<div>Username:</div><br />
						<input name="username" type="text" id="username" size="35" maxlength="100" value="" /><br /><br />						
						<div>Password:</div><br />
						<input name="password" type="password" id="password" size="35" maxlength="100" value="" />						
						<div class="clr"></div><br />			
						<a class="link" href="#" onclick="document.forms.loginForm.submit();">LOGIN</a>
						<br /><br /><span class="red"><?php echo $this->_tpl_vars['message']; ?>
</span><br />
					</form>
				</div>				
				<div class="clr"></div>
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		</div>
	</body>
</html>