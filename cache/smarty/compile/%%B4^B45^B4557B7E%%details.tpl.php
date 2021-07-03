<?php /* Smarty version 2.6.20, created on 2013-05-13 22:01:11
         compiled from admin/events/details.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
		<script type="text/javascript" language="javascript" src="/library/javascript/nicedit/nicEdit.js"></script>
		<title>Admin Panel |  Events</title>
	<?php echo '
	<script type="text/javascript">
		$().ready(function() {
			
			$( "#event_startDate" ).datepicker({dateFormat : \'yy-mm-dd\'});
			
			$( "#areaname" ).autocomplete({
			  source: "/includes/areas.php",
			  minLength: 2,
			  select: function( event, ui ) {
				$(\'.selectedarea\').html(ui.item.value);
				$(\'#fk_area_id\').val(ui.item.id);
			  }
			});
			
		new nicEditor({
			iconsPath : \'/library/javascript/nicedit/nicEditorIcons.gif\',
			maxHeight : \'800\',
			buttonList : [\'fontSize\',\'bold\',\'italic\',\'underline\',\'strikeThrough\',\'subscript\',\'superscript\', \'ul\', \'ol\', \'link\', \'unlink\', \'fontSize\', \'fontFamily\', \'fontFormat\', \'forecolor\', \'bgcolor\'],
		}).panelInstance(\'event_page\');
		
		});
	</script>
	<style type="text/css">
	 .ui-autocomplete-loading {
		background: white url(\'/images/ui-anim_basic_16x16.gif\') right center no-repeat;
	  }	  
	</style>		
	'; ?>
		
	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/menu.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<p class="breadcrum">
				<a href="/admin/">Home</a> &raquo; 
				<a href="/admin/events/">Events</a> &raquo; 
				<a href="#"><?php if (isset ( $this->_tpl_vars['eventData'] )): ?><?php echo $this->_tpl_vars['eventData']['event_name']; ?>
<?php else: ?>New Event<?php endif; ?></a>
			</p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="/admin/events/details.php<?php if (isset ( $this->_tpl_vars['eventData'] )): ?>?reference=<?php echo $this->_tpl_vars['eventData']['pk_event_id']; ?>
<?php endif; ?>" method="post">
					<div>	
						<div class="article">
							<h4><a href="#">Event Name</a></h4>
							<p class="short">
								<input type="text" name="event_name" size="40" id="event_name" value="<?php echo $this->_tpl_vars['eventData']['event_name']; ?>
"/>
								<?php if (isset ( $this->_tpl_vars['errorArray']['event_name'] )): ?><span class="error"><?php echo $this->_tpl_vars['errorArray']['event_name']; ?>
</span><?php endif; ?>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Area Name</a></h4>
							<p class="short">
							<input type="text" value="<?php echo $this->_tpl_vars['eventData']['areaMap_path']; ?>
"" size="79" id="areaname" name="areaname" />
							<input type="hidden" id="fk_area_id" name="fk_area_id" value="<?php echo $this->_tpl_vars['eventData']['fk_area_id']; ?>
" />	
							<?php if (isset ( $this->_tpl_vars['errorMessages']['fk_area_id'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['fk_area_id']; ?>
</span><?php endif; ?>	
							</p>
						</div>						
						<div class="article">
							<h4><a href="#">Events Active</a></h4>
							<p class="short">
								<input type="checkbox" name="event_active" id="event_active" value="1" <?php if ($this->_tpl_vars['eventData']['event_active'] == 1): ?> CHECKED<?php endif; ?>/>
							</p>
						</div>	
						<div class="article">
							<h4><a href="#">Start Date</a></h4>
							<p class="short">
								<input type="text" name="event_startDate" size="11" id="event_startDate" value="<?php echo $this->_tpl_vars['eventData']['event_startDate']; ?>
"/>
							</p>
						</div>		
						<div class="article">
							<h4><a href="#">Event Page</a> - This is the page content that will show on the page when a user goes to the description.</h4>
							<p class="short">
								<textarea id="event_page" name="event_page" cols="100" rows="50"><?php echo $this->_tpl_vars['eventData']['event_page']; ?>
</textarea>
							</p>
						</div>	
						<div class="article">
							<p class="short">
								<a class="link" href="javascript:submitForm();">Save Details</a>	
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
				nicEditors.findEditor(\'event_page\').saveContent();
				document.forms.detailsForm.submit();					 
			}				
			</script>
			'; ?>
				
		</div>
	</body>
</html>