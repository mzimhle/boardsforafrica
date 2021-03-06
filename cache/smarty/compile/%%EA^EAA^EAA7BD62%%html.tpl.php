<?php /* Smarty version 2.6.20, created on 2013-05-14 20:22:24
         compiled from admin/items/sizes/html.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/items/sizes/html.tpl', 14, false),)), $this); ?>
<!-- Start Content Table -->
<div class="content_table">
    <form name="htmlForm" id="htmlForm" action="#" method="post">
		<table id="grid_table" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<th>Added</th>
			<th>Long Name</th>			
			<th>Short Name</th>
			<th>Status</th>
		   </tr>
		   <caption>Table: colours </caption>
		  <?php $_from = $this->_tpl_vars['sizeItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr>
			<td align="left" class="alt"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['size_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>		
			<td align="left" class="alt"><a href="/admin/items/sizes/details.php?reference=<?php echo $this->_tpl_vars['item']['pk_size_id']; ?>
"><?php echo $this->_tpl_vars['item']['size_longName']; ?>
</a></td>	
			<td align="left" class="alt"><?php echo $this->_tpl_vars['item']['size_shortName']; ?>
</td>		
			<td align="left" class="alt"><?php if ($this->_tpl_vars['item']['size_active'] == '1'): ?><span class="success">Active</span><?php else: ?><span class="error">Non Active</span><?php endif; ?></td>
		</tr>
		  <?php endforeach; else: ?>
			<tr>
				<td colspan="9">There are no current items in the system.</td>
			</tr>
		  <?php endif; unset($_from); ?>     
		</table>
     </form>
 </div>
 
 <!-- End Content Table -->
<div class="clr"></div><br />
<?php if ($this->_tpl_vars['paginator']->firstPageInRange != $this->_tpl_vars['paginator']->lastPageInRange): ?>
 <!-- Start Pagination -->
<div class="paging">
     <ul class="pagination">
		   <?php if ($this->_tpl_vars['paginator']->current > 1): ?>
			<li class="paginate_prev"><a href="javascript:void(0);" onclick="send_filter(<?php echo $this->_tpl_vars['paginator']->previous; ?>
);">&laquo; Previous</a></li>
			<?php endif; ?>
			 <?php $_from = $this->_tpl_vars['paginator']->pagesInRange; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
        		<li <?php if ($this->_tpl_vars['page'] == $this->_tpl_vars['paginator']->current): ?> class="active" <?php endif; ?>><a href="javascript:void(0);" onclick="send_filter(<?php echo $this->_tpl_vars['page']; ?>
);"><?php echo $this->_tpl_vars['page']; ?>
</a></li>
       		<?php endforeach; endif; unset($_from); ?>
			<?php if ($this->_tpl_vars['paginator']->current < $this->_tpl_vars['paginator']->lastPageInRange): ?>
			<li class="paginate_next"><a href="javascript:void(0);" onclick="send_filter(<?php echo $this->_tpl_vars['paginator']->next; ?>
);">Next &raquo;</a></li>
			<?php endif; ?>
	</ul>
</div>      
<?php endif; ?>
<div class="clear"></div>