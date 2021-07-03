<?php /* Smarty version 2.6.20, created on 2013-05-08 20:06:09
         compiled from admin/clothes/items/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'admin/clothes/items/details.tpl', 89, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
		<title>Admin Panel | Clothes | Items</title>
	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/menu.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<p class="breadcrum">
				<a href="/admin/">Home</a> &raquo; 
				<a href="/admin/clothes/">Clothes</a> &raquo; 
				<a href="/admin/clothes/items/">Items</a> &raquo; 
				<a href="#"><?php if (isset ( $this->_tpl_vars['itemData'] )): ?><?php echo $this->_tpl_vars['itemData']['clotheItem_name']; ?>
<?php else: ?>New Item<?php endif; ?></a>
			</p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="/admin/clothes/items/details.php<?php if (isset ( $this->_tpl_vars['itemData'] )): ?>?reference=<?php echo $this->_tpl_vars['itemData']['pk_clotheItem_id']; ?>
<?php endif; ?>" method="post" enctype="multipart/form-data">
					<div class="col">
						<div class="article">
							<h4><a href="#">Item Name</a></h4>
							<p class="short">
								<input type="text" name="clotheItem_name" id="clotheItem_name" size="40" value="<?php echo $this->_tpl_vars['itemData']['clotheItem_name']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['clotheItem_name'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['clotheItem_name']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Code</a></h4>
							<p class="short">
								<input type="text" name="clotheItem_code" id="clotheItem_code" size="20" value="<?php echo $this->_tpl_vars['itemData']['clotheItem_code']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['clotheItem_code'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['clotheItem_code']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Image <span class="error">(will be resized to 200x150)</span></a></h4>
							<p class="short">
								<input type="file" name="clotheItem_image" id="clotheItem_image" />
								<?php if (isset ( $this->_tpl_vars['errorArray']['clotheItem_image'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['clotheItem_image']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<?php if ($this->_tpl_vars['itemData']['clotheItem_image'] != ''): ?>						
						<div class="article">
							<h4><a href="#">Current Item Image</a></h4>
							<p class="short">
								<img src="<?php echo $this->_tpl_vars['itemData']['clotheItem_image']; ?>
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
									<li><input type="checkbox" name="fk_clotheColour_id[]" <?php if ($this->_tpl_vars['item']['selected'] == 1): ?> CHECKED <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['pk_clotheColour_id']; ?>
" id="fk_clotheColour_id" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['item']['clotheColour_name']; ?>
</li>
								<?php endforeach; else: ?>
									<li><span class="error">Please add a colour for clothes first before adding an item.</span></li>
									<input type="hidden" id="fk_clotheColour_id" name="fk_clotheColour_id" value="" />
								<?php endif; unset($_from); ?>  
								</ul>
								<?php if (isset ( $this->_tpl_vars['errorArray']['fk_clotheColour_id'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_clotheColour_id']; ?>
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
									<li><input type="checkbox" name="fk_clotheSize_id[]" <?php if ($this->_tpl_vars['item']['selected'] == 1): ?> CHECKED <?php endif; ?> value="<?php echo $this->_tpl_vars['item']['pk_clotheSize_id']; ?>
" id="fk_clotheSize_id" />&nbsp;&nbsp;<?php echo $this->_tpl_vars['item']['clotheSize_longName']; ?>
 (<?php echo $this->_tpl_vars['item']['clotheSize_shortName']; ?>
)</li>
								<?php endforeach; else: ?>
									<li><span class="error">Please add a size for clothes first before adding an item.</span></li>
									<input type="hidden" id="fk_clotheSize_id" name="fk_clotheSize_id" value="" />
								<?php endif; unset($_from); ?>  
								</ul>
								<?php if (isset ( $this->_tpl_vars['errorArray']['fk_clotheSize_id'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_clotheSize_id']; ?>
</span><?php endif; ?>
							</p>
						</div>								
					<a class="link" href="javascript:submitForm();">Save Details</a>								
					</div>				
					<div class="col">
						<div class="article">
							<h4><a href="#">Clothes Type</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['typePairs'] )): ?> 
							<select id="fk_clotheType_id" name="fk_clotheType_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['typePairs'],'selected' => $this->_tpl_vars['itemData']['fk_clotheType_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_clotheType_id" name="fk_clotheType_id" value="" />
								<span class="error">Please add a clothes brand first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_clotheType_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_clotheType_id']; ?>
</span><?php endif; ?>
							</p>
						</div>
						<div class="article">
							<h4><a href="#">Item Features</a></h4>
							<p class="short">
								<textarea id="clotheItem_features" name="clotheItem_features" rows="3" cols="30"><?php echo $this->_tpl_vars['itemData']['clotheItem_features']; ?>
</textarea>
							</p>
						</div>		
						<div class="article">
							<h4><a href="#">Item Branding Options</a></h4>
							<p class="short">
								<textarea id="clotheItem_brandingOptions" name="clotheItem_brandingOptions" rows="3" cols="30"><?php echo $this->_tpl_vars['itemData']['clotheItem_brandingOptions']; ?>
</textarea>
							</p>
						</div>
						<div class="article">
							<h4><a href="#">Item Description</a></h4>
							<p class="short">
								<textarea id="clotheItem_description" name="clotheItem_description" rows="5" cols="40"><?php echo $this->_tpl_vars['itemData']['clotheItem_description']; ?>
</textarea>
								<?php if (isset ( $this->_tpl_vars['errorArray']['clotheItem_description'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['clotheItem_description']; ?>
</span><?php endif; ?>
							</p>
						</div>						
					</div>	
						<div class="col">
						<div class="article">
							<h4><a href="#">Item Product</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['productPairs'] )): ?> 
							<select id="fk_clotheProduct_id" name="fk_clotheProduct_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['productPairs'],'selected' => $this->_tpl_vars['itemData']['fk_clotheProduct_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_clotheProduct_id" name="fk_clotheProduct_id" value="" />
								<span class="error">Please add a clothes category first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_clotheProduct_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_clotheProduct_id']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Brand</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['brandPairs'] )): ?> 
							<select id="fk_clotheBrand_id" name="fk_clotheBrand_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['brandPairs'],'selected' => $this->_tpl_vars['itemData']['fk_clotheBrand_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_clotheBrand_id" name="fk_clotheBrand_id" value="" />
								<span class="error">Please add a clothes brand first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_clotheBrand_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_clotheBrand_id']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Item Category</a></h4>
							<p class="short">
							<?php if (isset ( $this->_tpl_vars['categoryPairs'] )): ?> 
							<select id="fk_clotheCategory_id" name="fk_clotheCategory_id">
								<option value=""> ---- </option>
								<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['categoryPairs'],'selected' => $this->_tpl_vars['itemData']['fk_clotheCategory_id']), $this);?>
</td>
							</select>
							<?php else: ?>
								<input type="hidden" id="fk_clotheCategory_id" name="fk_clotheCategory_id" value="" />
								<span class="error">Please add a clothes category first to add a type.</span>
							<?php endif; ?>
							<?php if (isset ( $this->_tpl_vars['errorArray']['fk_clotheCategory_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['fk_clotheCategory_id']; ?>
</span><?php endif; ?>
							</p>
						</div>							
						<div class="article">
							<h4><a href="#">Item Active</a></h4>
							<p class="short">
								<input type="checkbox" name="clotheItem_active" id="clotheItem_active" value="1" <?php if ($this->_tpl_vars['itemData']['clotheItem_active'] == 1): ?> CHECKED<?php endif; ?>/>
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