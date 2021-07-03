<?php /* Smarty version 2.6.20, created on 2013-05-08 20:12:06
         compiled from admin/clothes/default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<title>Admin Panel Home</title>
	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/menu.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<p class="breadcrum">
				<a class="first" href="/admin/">Home</a> &raquo; 
				<a href="/admin/clothes/">Clothes</a>
			</p>			
			<p class="linebreak"></p>			
			<div id="main">	
				<div class="col">			
					<div class="article">
						<h4><a href="/admin/clothes/brands/">Manage Brands</a></h4>
						<p class="short line">Manage brand information by adding new ones, updating or deleting.<a href="/admin/clothes/brands/">&raquo;</a></p>
					</div>			
					<div class="article">
						<h4><a href="/admin/clothes/items/">Manage Items</a></h4>
						<p class="short line">Manage items information by adding new ones, updating or deleting.<a href="/admin/clothes/items/">&raquo;</a></p>					
					</div>
					<div class="article">
						<h4><a href="/admin/clothes/products/">Manage Products</a></h4>
						<p class="short line">Manage products information by adding new ones, updating or deleting.<a href="/admin/clothes/products/">&raquo;</a></p>					
					</div>						
				</div>	
				<div class="col">		
					<div class="article">
						<h4><a href="/admin/clothes/colours/">Manage Colours</a></h4>
						<p class="short line">Manage colours information by adding new ones, updating or deleting.<a href="/admin/clothes/colours/">&raquo;</a></p>
					</div>
					<div class="article">
						<h4><a href="/admin/clothes/categories/">Manage Categories</a></h4>
						<p class="short line">Manage categories information by adding new ones, updating or deleting.<a href="/admin/clothes/categories/">&raquo;</a></p>					
					</div>					
				</div>	
				<div class="col">			
					<div class="article">
						<h4><a href="/admin/clothes/sizes/">Manage Sizes</a></h4>
						<p class="short line">Manage sizes information by adding new ones, updating or deleting.<a href="/admin/clothes/sizes/">&raquo;</a></p>
					</div>				
					<div class="article">
						<h4><a href="/admin/clothes/types/">Manage Types</a></h4>
						<p class="short line">Manage types information by adding new ones, updating or deleting.<a href="/admin/clothes/types/">&raquo;</a></p>
					</div>				
				</div>					
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		</div>
	</body>
</html>