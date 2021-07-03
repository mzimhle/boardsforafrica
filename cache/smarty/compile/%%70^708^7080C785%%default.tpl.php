<?php /* Smarty version 2.6.20, created on 2013-05-13 21:45:48
         compiled from contact/default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Safety Mecca | Contact Us</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="description" content="Safety Mecca is involved in the manufacture, wholesale and retail of protective clothing. Our range includes: rainwear, overalls, promotional clothing, safety footwear, SABS approved safety equipment, embroidery and screen-printing to project a professional appearance to the industrial and corporate world.">                
		<meta name="keywords" content="manufacture, wholesale, retail, protective clothing, rainwear, overalls, promotional clothing, safety footwear, SABS approved safety equipment, embroidery, screen-printing">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="21 days">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property="og:title" content="Safety Mecca"> 
		<meta property="og:image" content="http://safetymecca.co.za/images/safety_mecca_logo.png"> 
		<meta property="og:url" content="http://safetymecca.co.za">
		<meta property="og:site_name" content="Safety Mecca">
		<meta property="og:type" content="website">
		<meta property="og:description" content="afety Mecca is involved in the manufacture, wholesale and retail of protective clothing.">
		<link rel="stylesheet" href="/library/javascript/jquery-ui/jquery-ui.css" />
		<script src="/library/javascript/jquery-ui/jquery-1.9.1.js"></script>
		<script src="/library/javascript/jquery-ui/jquery-ui.js"></script>		
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/css.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
		<?php echo '
		<style type="text/css">
		 .ui-autocomplete-loading {
			background: white url(\'/images/ui-anim_basic_16x16.gif\') right center no-repeat;
		  }	  
		</style>		
		'; ?>

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
					<h1>Contact Us</h1>
						<p class="contactus-text">Please fill in the below form so that we can get back to you as soon as we can.</p>						
						<form id="contactForm" name="contactForm" action="/contact/" method="post">
						<div class="article">
							<p>Name</p>
							<input type="text" value="" size="40" id="enquiry_name" name="enquiry_name" />
							 <?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_name'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_name']; ?>
</span><?php endif; ?>
						</div>	
						<div class="article">
							<p>Email</p>
							<input type="text" value="" size="40" id="enquiry_email" name="enquiry_email" />
							<?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_email'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_email']; ?>
</span><?php endif; ?>
						</div>	
						<div class="article">
							<p>Number</p>
							<input type="text" value="" size="40" id="enquiry_number" name="enquiry_number" />
							<?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_number'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_number']; ?>
</span><?php endif; ?>
						</div>
						<div class="article">
							<p>Area / City</p>
							<input type="text" value="" size="79" id="areaname" name="areaname" />
							<input type="hidden" id="fk_area_id" name="fk_area_id" value="" />	
							<?php if (isset ( $this->_tpl_vars['errorMessages']['fk_area_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['fk_area_id']; ?>
</span><?php endif; ?>							
						</div>							
						<div class="article">
							<p>Message<?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_comments'] )): ?> - <span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_comments']; ?>
</span><?php endif; ?></p>
							<textarea cols="60" rows="5" id="enquiry_comments" name="enquiry_comments"></textarea>							
						</div>						
						<a href="javascript:submitForm();" class="contact-button"></a>
						<h3>Our address</h3>
						<p>Unite 1, 5 Cecil Morgan Street, Cape Town 7530, South Africa - <a href="https://maps.google.co.za/maps/ms?msa=0&amp;msid=215475357100981281729.0004dbcf5915535ee2088&amp;gl=za&amp;ie=UTF8&amp;ll=-33.901092,18.670937&amp;spn=0,0&amp;t=h&amp;source=embed" target="_blank" style="color:#D19139;text-align:left; text-decoration: none;">View Larger Map</a></p><br />
						<iframe width="650" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.za/maps/ms?msa=0&amp;msid=215475357100981281729.0004dbcf5915535ee2088&amp;gl=za&amp;ie=UTF8&amp;ll=-33.901092,18.670937&amp;spn=0,0&amp;t=h&amp;output=embed"></iframe><br />					
						</form>				
				</div>
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/footer.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
		</div>
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/right_content.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
		<?php echo '
			<script type="text/javascript">
			  $(function() {
				$( "#areaname" ).autocomplete({
				  source: "/includes/areas.php",
				  minLength: 2,
				  select: function( event, ui ) {
					$(\'.selectedarea\').html(ui.item.value);
					$(\'#fk_area_id\').val(ui.item.id);
				  }
				});
			  });			
			  
				function submitForm() {
					document.forms.contactForm.submit();					 
				}
			</script>
		'; ?>
	
		</div>
	</body>
</html>