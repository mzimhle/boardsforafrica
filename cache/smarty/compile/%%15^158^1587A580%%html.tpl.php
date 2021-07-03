<?php /* Smarty version 2.6.20, created on 2014-12-21 16:01:00
         compiled from admin/enquiries/html.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'admin/enquiries/html.tpl', 16, false),)), $this); ?>
<!-- Start Content Table -->
<div class="content_table">
    <form name="htmlForm" id="htmlForm" action="/admin/enquiries/html.php" method="post">
    
    <table id="grid_table" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th>Added</th>
		<th>Reference</th>
        <th>Full name</th>
		<th>Email</th>
		<th>Subject</th>
       </tr>
	   <caption>Table: Enquiries</caption>
      <?php $_from = $this->_tpl_vars['enquiryItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
      <tr>
        <td align="left" class="alt"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['enquiry_added'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>		
		<td align="left" class="alt"><?php echo $this->_tpl_vars['item']['enquiry_reference']; ?>
</td>		
        <td align="left" class="alt"><a href="/admin/enquiries/details.php?reference=<?php echo $this->_tpl_vars['item']['pk_enquiry_id']; ?>
"><?php echo $this->_tpl_vars['item']['enquiry_name']; ?>
</a></td>	
		<td align="left" class="alt"><?php echo $this->_tpl_vars['item']['enquiry_email']; ?>
</td>
		<td align="left" class="alt"><?php echo $this->_tpl_vars['item']['enquiry_subject']; ?>
</td>
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