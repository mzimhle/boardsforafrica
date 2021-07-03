<?php /* Smarty version 2.6.20, created on 2013-05-16 00:58:24
         compiled from admin/items/items/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/items/items/details.tpl', 89, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
		<title>Admin Panel | Items | Items</title>
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
				<a href="/admin/items/items/">Items</a> &raquo; 
				<a href="#"><?php if (isset ( $this->_tpl_vars['itemData'] )): ?><?php echo $this->_tpl_vars['itemData']['item_name']; ?>
<?php else: ?>New Item<?php endif; ?></a>
			</p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="/admin/items/items/details.php<?php if (isset ( $this->_tpl_vars['itemData'] )): ?>?reference=<?php echo $this->_tpl_vars['itemData']['pk_item_id']; ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
					<div class="col">
						<div class="article">
							<h4><a href="#">Item Name</a></h4>
							<p class="short">
								<input type="text" name="item_name" id="item_name" size="40" value="<?php echo $this->_tpl_vars['itemData']['item_name']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['item_name'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['item_name']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Code</a></h4>
							<p class="short">
								<input type="text" name="item_code" id="item_code" size="20" value="<?php echo $this->_tpl_vars['itemData']['item_code']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['item_code'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['item_code']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Image <span class="error">(will be resized to 200x150)</span></a></h4>
							<p class="short">
								<input type="file" name="item_image" id="item_image" />
								<?php if (isset ( $this->_tpl_vars['errorArray']['item_image'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['item_image']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<?php if ($this->_tpl_vars['itemData']['item_image'] != ''): ?>						
						<div class="article">
							<h4><a href="#">Current Item Image</a></h4>
							<p class="short">
								<img src="<?php echo $this->_tpl_vars['itemData']['item_image']; ?>
" />
							</p>
						</div>			
						<?php endif; ?>							
						<div class="article">
							<h4><a href="#">Available Colours</a></h4>
							<p class="short">
								<ul class="colourlist">
								<?php $_from = $this->_tpl_vars['colours']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<li><input type="checkbox" name="fk_colour_id[]" <?php if ($this->_tpl_vars['item']['selected'] == 1): ?> CHECKED <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['pk_colour_id']; ?>
" id="fk_colour_id" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['item']['colour_name']; ?>
</li>
								<?php endforeach; else: ?>
									<li><span class="error">Please add a colour for clothes first before adding an item.</span></li>
									<input type="hidden" id="fk_colour_id" name="fk_colour_id" value="" />
								<?php endif; unset($_from); ?>  
								</ul>
								<?php if (isset ( $this->_tpl_vars['errorArray']['fk_colour_id'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_colour_id']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Available Sizes</a></h4>
							<p class="short">
								<ul class="colourlist">
								<?php $_from = $this->_tpl_vars['sizes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
									<li><input type="checkbox" name="fk_size_id[]" <?php if ($this->_tpl_vars['item']['selected'] == 1): ?> CHECKED <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['pk_size_id']; ?>
" id="fk_size_id" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['item']['size_longName']; ?>
 (<?php echo $this->_tpl_vars['item']['size_shortName']; ?>
)</li>
								<?php endforeach; else: ?>
									<li><span class="error">Please add a size for clothes first before adding an item.</span></li>
									<input type="hidden" id="fk_size_id" name="fk_size_id" value="" />
								<?php endif; unset($_from); ?>  
								</ul>
								<?php if (isset ( $this->_tpl_vars['errorArray']['fk_size_id'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_size_id']; ?>
</span><?php endif; ?>
							</p>
						</div>								
					<a class="link" href="javascript:submitForm();">Save Details</a>								
					</div>				
					<div class="col">
						<div class="article">
							<h4><a href="#">Items Type</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['typePairs'] )): ?> 
							<select id="fk_type_id" name="fk_type_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['typePairs'],'selected' => $this->_tpl_vars['itemData']['fk_type_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_type_id" name="fk_type_id" value="" />
								<span class="error">Please add a clothes brand first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_type_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_type_id']; ?>
</span><?php endif; ?>
							</p>
						</div>
						<div class="article">
							<h4><a href="#">Item Features</a></h4>
							<p class="short">
								<textarea id="item_features" name="item_features" rows="3" cols="30"><?php echo $this->_tpl_vars['itemData']['item_features']; ?>
</textarea>
							</p>
						</div>		
						<div class="article">
							<h4><a href="#">Item Branding Options</a></h4>
							<p class="short">
								<textarea id="item_brandingOptions" name="item_brandingOptions" rows="3" cols="30"><?php echo $this->_tpl_vars['itemData']['item_brandingOptions']; ?>
</textarea>
							</p>
						</div>
						<div class="article">
							<h4><a href="#">Item Description</a></h4>
							<p class="short">
								<textarea id="item_description" name="item_description" rows="20" cols="40"><?php echo $this->_tpl_vars['itemData']['item_description']; ?>
</textarea>
								<?php if (isset ( $this->_tpl_vars['errorArray']['item_description'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['item_description']; ?>
</span><?php endif; ?>
							</p>
						</div>						
					</div>	
						<div class="col">
						<div class="article">
							<h4><a href="#">Item Product</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['productPairs'] )): ?> 
							<select id="fk_product_id" name="fk_product_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['productPairs'],'selected' => $this->_tpl_vars['itemData']['fk_product_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_product_id" name="fk_product_id" value="" />
								<span class="error">Please add a clothes category first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_product_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_product_id']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Brand</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['brandPairs'] )): ?> 
							<select id="fk_brand_id" name="fk_brand_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['brandPairs'],'selected' => $this->_tpl_vars['itemData']['fk_brand_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_brand_id" name="fk_brand_id" value="" />
								<span class="error">Please add a clothes brand first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_brand_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_brand_id']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Category</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['categoryPairs'] )): ?> 
							<select id="fk_category_id" name="fk_category_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['categoryPairs'],'selected' => $this->_tpl_vars['itemData']['fk_category_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_category_id" name="fk_category_id" value="" />
								<span class="error">Please add a clothes category first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_category_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_category_id']; ?>
</span><?php endif; ?>
							</p>
						</div>							
						<div class="article">
							<h4><a href="#">Item Active</a></h4>
							<p class="short">
								<input type="checkbox" name="item_active" id="item_active" value="1" <?php if ($this->_tpl_vars['itemData']['item_active'] == 1): ?> CHECKED<?php endif; ?>/>
							</p>
						</div>											
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