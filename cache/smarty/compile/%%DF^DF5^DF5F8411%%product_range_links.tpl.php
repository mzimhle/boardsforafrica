<?php /* Smarty version 2.6.20, created on 2013-05-16 01:06:16
         compiled from includes/product_range_links.tpl */ ?>
<div id="product-range-links"><table width="100%">	<?php $_from = $this->_tpl_vars['categoryData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['itemId'] => $this->_tpl_vars['item']):
        $this->_foreach['category']['iteration']++;
?>		<?php if (($this->_foreach['category']['iteration'] <= 1)): ?><tr><?php endif; ?>			<td width="25%">					<a href="/product-ranges/<?php echo $this->_tpl_vars['item']['category_url']; ?>
/">						<?php echo $this->_tpl_vars['item']['category_name']; ?>
					</a>				</td>			<?php if (($this->_foreach['category']['iteration'] == $this->_foreach['category']['total'])): ?></tr>			<?php else: ?>			<?php if (!($this->_foreach['category']['iteration'] % 4)): ?></tr><tr>			<?php endif; ?>		<?php endif; ?>	<?php endforeach; endif; unset($_from); ?></table>	</div>