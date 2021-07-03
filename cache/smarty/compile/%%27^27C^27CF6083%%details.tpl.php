<?php /* Smarty version 2.6.20, created on 2013-05-13 21:17:35
         compiled from admin/items/colours/details.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
		<title>Admin Panel | Items | Colours</title>
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
				<a href="/admin/items/colours/">Colours</a> &raquo; 
				<a href="#"><?php if (isset ( $this->_tpl_vars['colourData'] )): ?><?php echo $this->_tpl_vars['colourData']['colour_name']; ?>
<?php else: ?>New Colour<?php endif; ?></a>
			</p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="/admin/items/colours/details.php<?php if (isset ( $this->_tpl_vars['colourData'] )): ?>?reference=<?php echo $this->_tpl_vars['colourData']['pk_colour_id']; ?>
<?php endif; ?>" method="post">
					<div class="col">
						<div class="article">
							<h4><a href="#">Colour Name</a></h4>
							<p class="short">
								<input type="text" name="colour_name" id="colour_name" size="40" value="<?php echo $this->_tpl_vars['colourData']['colour_name']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['colour_name'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['colour_name']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Colour Code - </a>e.g. #00FFCC</h4>
							<p class="short">
								<input type="text" name="colour_colour" id="colour_colour" size="40" value="<?php echo $this->_tpl_vars['colourData']['colour_colour']; ?>
"/>
							</p>
						</div>						
						<div class="article">
							<h4><a href="#">Colour Active</a></h4>
							<p class="short">
								<input type="checkbox" name="colour_active" id="colour_active" value="1" <?php if ($this->_tpl_vars['colourData']['colour_active'] == 1): ?> CHECKED<?php endif; ?>/>
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