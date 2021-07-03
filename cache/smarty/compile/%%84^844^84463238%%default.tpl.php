<?php /* Smarty version 2.6.20, created on 2013-05-13 22:01:05
         compiled from events/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'events/default.tpl', 55, false),array('modifier', 'normal_text', 'events/default.tpl', 57, false),array('modifier', 'strip_tags', 'events/default.tpl', 57, false),array('modifier', 'truncate', 'events/default.tpl', 57, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Safety Mecca | Events</title>
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
					<h2>Safety Mecca Events</h2>
					<div class="clr"></div><br />
					<?php if ($this->_tpl_vars['paginator']->firstPageInRange != $this->_tpl_vars['paginator']->lastPageInRange): ?>
					 <!-- Start Pagination -->
					<div class="paging">
						 <ul class="pagination">
							   <?php if ($this->_tpl_vars['paginator']->current > 1): ?>
								<li class="paginate_prev"><a href="/events/?page=<?php echo $this->_tpl_vars['paginator']->previous; ?>
">&laquo; Previous</a></li>
								<?php endif; ?>
								 <?php $_from = $this->_tpl_vars['paginator']->pagesInRange; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
									<li <?php if ($this->_tpl_vars['page'] == $this->_tpl_vars['paginator']->current): ?> class="active" <?php endif; ?>><a href="/events/?page=<?php echo $this->_tpl_vars['page']; ?>
"><?php echo $this->_tpl_vars['page']; ?>
</a></li>
								<?php endforeach; endif; unset($_from); ?>
								<?php if ($this->_tpl_vars['paginator']->current < $this->_tpl_vars['paginator']->lastPageInRange): ?>
								<li class="paginate_next"><a href="/events/?page=<?php echo $this->_tpl_vars['paginator']->next; ?>
">Next &raquo;</a></li>
								<?php endif; ?>
						</ul>
					</div> 
					<br /><br />
					<?php endif; ?>						
					<table id="pagination-items" name="pagination-items">
						<?php $_from = $this->_tpl_vars['eventItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['itemData'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['itemData']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['itemId'] => $this->_tpl_vars['item']):
        $this->_foreach['itemData']['iteration']++;
?>
						<tr>
							<td>
								<a style="font-weight: bold" href="/events/<?php echo $this->_tpl_vars['item']['pk_event_id']; ?>
">
									<span style="font-family: outfutura-light;"><?php echo $this->_tpl_vars['item']['event_name']; ?>
</span><br />
									<span style="color: #D19139;">Surbur / City : <?php echo $this->_tpl_vars['item']['areaMap_shortPath']; ?>
<br />
									Start Date : <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['event_startDate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
<br /></span>
								</a>
								<p><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['event_page'])) ? $this->_run_mod_handler('normal_text', true, $_tmp) : smarty_modifier_normal_text($_tmp)))) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 300) : smarty_modifier_truncate($_tmp, 300)); ?>
</p>
								<hr>
							</td>
						</tr>
						<?php endforeach; else: ?>
						<tr>
							<td><p>There are no current events to show.</p></td>
						</tr>
						<?php endif; unset($_from); ?>
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