<?php /* Smarty version 2.6.20, created on 2013-05-16 00:58:20
         compiled from admin/items/default.tpl */ ?>
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
				<a href="/admin/items/">Items</a>
			</p>			
			<p class="linebreak"></p>			
			<div id="main">	
				<div class="col">			
					<div class="article">
						<h4><a href="/admin/items/brands/">Manage Brands</a></h4>
						<p class="short line">Manage the makes / brands of all the items you have on the site.<a href="/admin/items/brands/">&raquo;</a></p>
					</div>			
					<div class="article">
						<h4><a href="/admin/items/items/">Manage Items</a></h4>
						<p class="short line">Manage items information by adding new ones, updating or deleting.<a href="/admin/items/items/">&raquo;</a></p>					
					</div>
					<div class="article">
						<h4><a href="/admin/items/products/">Manage Products</a></h4>
						<p class="short line">Manage products information by adding new ones, updating or deleting.<a href="/admin/items/products/">&raquo;</a></p>					
					</div>						
				</div>	
				<div class="col">		
					<div class="article">
						<h4><a href="/admin/items/colours/">Manage Colours</a></h4>
						<p class="short line">Manage colours information by adding new ones, updating or deleting.<a href="/admin/items/colours/">&raquo;</a></p>
					</div>
					<div class="article">
						<h4><a href="/admin/items/categories/">Manage Categories</a></h4>
						<p class="short line">Manage categories that will be displayed at the bottom of the "product range" page.<a href="/admin/items/categories/">&raquo;</a></p>					
					</div>					
				</div>	
				<div class="col">			
					<div class="article">
						<h4><a href="/admin/items/sizes/">Manage Sizes</a></h4>
						<p class="short line">Manage sizes information by adding new ones, updating or deleting.<a href="/admin/items/sizes/">&raquo;</a></p>
					</div>				
					<div class="article">
						<h4><a href="/admin/items/types/">Manage Types</a></h4>
						<p class="short line">Manage types of items in a product, this type is the gender an item is made for, e.g. male, female or unisex.<a href="/admin/items/types/">&raquo;</a></p>
					</div>				
				</div>					
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		</div>
	</body>
</html>