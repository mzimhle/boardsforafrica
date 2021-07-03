<?php /* Smarty version 2.6.20, created on 2013-05-03 13:54:28
         compiled from product-ranges/footwear/default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Safety Mecca | Product Ranges</title>
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
					<h2>Safety Mecca - Footwear</h2>
					<div class="clr"></div><br />
					<?php if ($this->_tpl_vars['paginator']->firstPageInRange != $this->_tpl_vars['paginator']->lastPageInRange): ?>
					 <!-- Start Pagination -->
					<div class="paging">
						 <ul class="pagination">
							   <?php if ($this->_tpl_vars['paginator']->current > 1): ?>
								<li class="paginate_prev"><a href="/product-ranges/footwear/?page=<?php echo $this->_tpl_vars['paginator']->previous; ?>
">&laquo; Previous</a></li>
								<?php endif; ?>
								 <?php $_from = $this->_tpl_vars['paginator']->pagesInRange; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
									<li <?php if ($this->_tpl_vars['page'] == $this->_tpl_vars['paginator']->current): ?> class="active" <?php endif; ?>><a href="/product-ranges/footwear/?page=<?php echo $this->_tpl_vars['page']; ?>
"><?php echo $this->_tpl_vars['page']; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
								<?php if ($this->_tpl_vars['paginator']->current < $this->_tpl_vars['paginator']->lastPageInRange): ?>
								<li class="paginate_next"><a href="/product-ranges/footwear/?page=<?php echo $this->_tpl_vars['paginator']->next; ?>
">Next &raquo;</a></li>
								<?php endif; ?>
						</ul>
					</div> 
					<br /><br />
					<?php endif; ?>						
					<table id="pagination-items" name="pagination-items">
						<?php $_from = $this->_tpl_vars['footWearItemsItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['footwear'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['footwear']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['itemId'] => $this->_tpl_vars['item']):
        $this->_foreach['footwear']['iteration']++;
?>
							<?php if (($this->_foreach['footwear']['iteration'] <= 1)): ?><tr><?php endif; ?>
								<td>
									<img src="<?php echo $this->_tpl_vars['item']['footwearItem_image']; ?>
" /><br />
										<a href="/product-ranges/footwear/details.php?reference=<?php echo $this->_tpl_vars['item']['pk_footwearItem_id']; ?>
">
											<span style="font-family: outfutura-light;"><?php echo $this->_tpl_vars['item']['footwearBrand_name']; ?>
</span><br />
											<span style="font-family: ourfutura-bold;"><?php echo $this->_tpl_vars['item']['footwearItem_name']; ?>
 - <?php echo $this->_tpl_vars['item']['footwearItem_code']; ?>
</span><br />
										</a>
									</td>
								<?php if (($this->_foreach['footwear']['iteration'] == $this->_foreach['footwear']['total'])): ?></tr>
								<?php else: ?>
								<?php if (!($this->_foreach['footwear']['iteration'] % 3)): ?></tr><tr><td colspan="3"><hr></td></tr><tr>
								<?php endif; ?>
							<?php endif; ?>
						<?php endforeach; endif; unset($_from); ?>
					</table>				
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