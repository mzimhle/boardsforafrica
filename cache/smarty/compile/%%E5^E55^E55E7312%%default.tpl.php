<?php /* Smarty version 2.6.20, created on 2013-05-13 21:24:30
         compiled from admin/items/types/default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
		<script type="text/javascript" language="javascript" src="default.js"></script>
		<title>Admin Panel | Items | Types</title>
	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/menu.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<p class="breadcrum">
				<a class="first" href="/admin/">Home</a> &raquo; 
				<a href="/admin/items/">Items</a> &raquo; 
				<a href="/admin/items/types/">Types</a>
				</p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="/admin/items/types/" method="post">
					<div class="colsearch">
						<div class="article">
							<h4><a href="#">Name</a></h4>
							<input type="text" id="search_text" name="search_text~t"  size="20" value=""/>
						</div>
						</div>	
					<div class="colsearch">
						<div class="article">
							<h4><a href="#">Entries Per Page</a></h4>
							<select class="small_field" id="per_page" name="per_page~i">
								<option value="" <?php if ($this->_tpl_vars['perPageSelect'] == ''): ?> selected="selected"<?php endif; ?>>All</option>
								<option value="5" <?php if ($this->_tpl_vars['perPageSelect'] == '5'): ?> selected="selected"<?php endif; ?>>5</option>
								<option value="10" <?php if ($this->_tpl_vars['perPageSelect'] == '10'): ?> selected="selected"<?php endif; ?>>10</option>
								<option value="20" <?php if ($this->_tpl_vars['perPageSelect'] == '20'): ?> selected="selected"<?php endif; ?>>20</option>
								<option value="30" <?php if ($this->_tpl_vars['perPageSelect'] == '30'): ?> selected="selected"<?php endif; ?>>30</option>
								<option value="40" <?php if ($this->_tpl_vars['perPageSelect'] == '40'): ?> selected="selected"<?php endif; ?>>40</option>
							</select>					
						</div>		
					</div>					
					<div class="colsearch last">	
						<a class="link" href="javascript:send_filter(1);">Search Types</a>
					</div>				
				</form>
				<div class="clr"></div>
				<p class="linebreak"></p>
				<div class="clr"></div>
				<a class="link" href="/admin/items/types/details.php">Add a Type</a>
				<div id="tableContent" align="center">Loading....</div>
			</div>							
			<div class="clr"></div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			</div>
	</body>
</html>