<?php /* Smarty version 2.6.20, created on 2013-05-03 13:54:31
         compiled from product-ranges/footwear/details.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Safety Mecca | Product Ranges | Footwear | <?php echo $this->_tpl_vars['itemData']['footwearItem_name']; ?>
</title>
		<meta name="description" content="Safety Mecca Footwear Range - <?php echo $this->_tpl_vars['itemData']['footwearItem_name']; ?>
 <?php echo $this->_tpl_vars['itemData']['footwearItem_code']; ?>
">                
		<meta name="keywords" content="manufacture, wholesale, retail, protective clothing, rainwear, overalls, promotional clothing, safety footwear, SABS approved safety equipment, embroidery, screen-printing">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="21 days">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property="og:title" content="Safety Mecca"> 
		<meta property="og:image" content="http://safetymecca.co.za/images/safety_mecca_logo.png"> 
		<meta property="og:url" content="http://safetymecca.co.za">
		<meta property="og:site_name" content="Safety Mecca">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Safety Mecca is involved in the manufacture, wholesale and retail of protective clothing.">
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/css.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
	</head>
	<body>
		<div class="wrappcontent">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/left_content.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
			<div id="wrapper" class="fl">		
				<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/header.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
				<div class="clear"></div>
				<div id="content">
					<div id="sidebar" class="fl">	
						<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/menu-links.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
					</div>
					<div id="content-body" class="fr">
						<h2><?php echo $this->_tpl_vars['itemData']['footwearItem_name']; ?>
</h2>	
						<table>
							<tr>
								<td align="center">
									<table id="product-detail" align="center">
										<tr>
											<td valign="bottom">
												<table>
													<tr>
														<td align="center"><img src="<?php echo $this->_tpl_vars['itemData']['footwearItem_image']; ?>
" /></td>
													</tr>
													<tr>
														<td><p><?php echo $this->_tpl_vars['itemData']['footwearItem_description']; ?>
</p></td>
													</tr>
												</table>
											</td>
											<td class="linedivide"></td>
											<td>
												<table style="margin-right: 126px;">
													<tr>
														<td><img src="/images/safety_mecca_footwear_details.jpg" /></td>
													</tr>	
													<tr>
														<td><h3 style="margin-bottom: 0px;margin-top: 3px;">Shoe Name</h3><p style="margin-top: 0px;margin-top: 0px;"><?php echo $this->_tpl_vars['itemData']['footwearItem_name']; ?>
</p></td>
													</tr>										
													<tr>
														<td><h3 style="margin-bottom: 0px;margin-top: 3px;">Brand Name</h3><p style="margin-top: 0px;margin-top: 0px;"><?php echo $this->_tpl_vars['itemData']['footwearBrand_name']; ?>
</p></td>
													</tr>	
													<tr>
														<td><h3 style="margin-bottom: 0px;margin-top: 3px;">Product Type</h3><p style="margin-top: 0px;margin-top: 0px;"><?php echo $this->_tpl_vars['itemData']['footwearType_name']; ?>
</p></td>
													</tr>	
													<tr>
														<td><h3 style="margin-bottom: 0px;margin-top: 3px;">Product Code</h3><p style="margin-top: 0px;margin-top: 0px;"><?php echo $this->_tpl_vars['itemData']['footwearItem_code']; ?>
</p></td>
													</tr>	
													<tr>
														<td><h3 style="margin-bottom: 0px;margin-top: 3px;">Product Color(s)</h3><p style="margin-top: 0px;margin-top: 0px;"><?php echo $this->_tpl_vars['colour']; ?>
</p></td>
													</tr>											
												</table>
												</td>
										</tr>
									</table>
						</td></tr></table>
					</div>
				</div>
				<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/footer.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/right_content.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
		</div>
	</body>
</html>