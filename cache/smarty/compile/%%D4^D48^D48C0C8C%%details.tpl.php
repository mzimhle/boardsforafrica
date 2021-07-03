<?php /* Smarty version 2.6.20, created on 2013-05-14 20:22:03
         compiled from admin/items/sizes/details.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
		<title>Admin Panel | Items | Sizes</title>
	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/menu.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<p class="breadcrum">
				<a href="/admin/">Home</a> &raquo; 
				<a href="/admin/items/">Items</a> &raquo; 
				<a href="/admin/items/sizes/">Sizes</a> &raquo; 
				<a href="#"><?php if (isset ( $this->_tpl_vars['sizeData'] )): ?><?php echo $this->_tpl_vars['sizeData']['size_longName']; ?>
<?php else: ?>New Size<?php endif; ?></a>
			</p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="/admin/items/sizes/details.php<?php if (isset ( $this->_tpl_vars['sizeData'] )): ?>?reference=<?php echo $this->_tpl_vars['sizeData']['pk_size_id']; ?>
<?php endif; ?>" method="post">
					<div class="col">
						<div class="article">
							<h4><a href="#">Sizes Long Name</a></h4>
							<p class="short">
								<input type="text" name="size_longName" id="size_longName" size="40" value="<?php echo $this->_tpl_vars['sizeData']['size_longName']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['size_longName'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['size_longName']; ?>
</span><?php endif; ?>
							</p>
						</div>		
						<div class="article">
							<h4><a href="#">Sizes Abbriviation Name</a></h4>
							<p class="short">
								<input type="text" name="size_shortName" id="size_name" size="5" value="<?php echo $this->_tpl_vars['sizeData']['size_shortName']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['size_shortName'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['size_shortName']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Size Numeric</a></h4>
							<p class="short">
								<input type="text" name="size_numeric" id="size_name" size="5" value="<?php echo $this->_tpl_vars['sizeData']['size_numeric']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['size_numeric'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['size_numeric']; ?>
</span><?php endif; ?>
							</p>
						</div>						
						<div class="article">
							<h4><a href="#">Sizes Active</a></h4>
							<p class="short">
								<input type="checkbox" name="size_active" id="size_active" value="1" <?php if ($this->_tpl_vars['sizeData']['size_active'] == 1): ?> CHECKED<?php endif; ?>/>
							</p>
						</div>					
						<a class="link" href="javascript:submitForm();">Save Details</a>				
					</div>				
					<div class="col">
							&nbsp;
					</div>	
				</form>						
				<div class="clr"></div>
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php echo '
			<script type="text/javascript">
			function submitForm() {
				document.forms.detailsForm.submit();					 
			}
			</script>
			'; ?>
				
		</div>
	</body>
</html>