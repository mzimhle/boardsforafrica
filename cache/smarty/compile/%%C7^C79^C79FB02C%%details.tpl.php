<?php /* Smarty version 2.6.20, created on 2014-12-21 15:59:47
         compiled from admin/enquiries/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/enquiries/details.tpl', 20, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
		<title>Admin | Enquiries | <?php echo $this->_tpl_vars['enquiryData']['enquiry_reference']; ?>
</title>
	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/menu.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<p class="breadcrum"><a class="first" href="/admin/">Home</a> &raquo; <a href="/admin/enquiries/">Enquiries</a> &raquo; <a href="#"><?php echo $this->_tpl_vars['enquiryData']['enquiry_name']; ?>
</a></p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="#" method="post">
					<div class="article">
						<h4><a href="#">Added</a></h4>
						<p class="short">
							<?php echo ((is_array($_tmp=$this->_tpl_vars['enquiryData']['enquiry_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

						</p>
					</div>					
					<div class="article">
						<h4><a href="#">Full Name</a></h4>
						<p class="short">
							<?php echo $this->_tpl_vars['enquiryData']['enquiry_name']; ?>

						</p>
					</div>
					<div class="article">
						<h4><a href="#">Email</a></h4>
						<p class="short">
							<?php echo $this->_tpl_vars['enquiryData']['enquiry_email']; ?>

						</p>
					</div>	
					<div class="article">
						<h4><a href="#">Reference</a></h4>
						<p class="short">
							<?php echo $this->_tpl_vars['enquiryData']['enquiry_reference']; ?>

						</p>
					</div>	
					<div class="article">
						<h4><a href="#">Subject</a></h4>
						<p class="short">
							<?php echo $this->_tpl_vars['enquiryData']['enquiry_subject']; ?>

						</p>
					</div>						
					<div class="article">
						<h4><a href="#">Message</a></h4>
						<p class="short">
							<?php echo $this->_tpl_vars['enquiryData']['enquiry_comments']; ?>

						</p>
					</div>																					
				</form>				
				<div class="clr"></div>
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		</div>
	</body>
</html>