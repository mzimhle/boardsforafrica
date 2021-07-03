<?php /* Smarty version 2.6.20, created on 2013-05-13 22:01:18
         compiled from admin/events/calendar.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
		<link rel="stylesheet" type="text/css" href="/library/javascript/jmonthcalendar/jmonthcalendar-1.2.2/css/core.css" media="screen" />
		<script type="text/javascript" language="javascript" src="/library/javascript/jmonthcalendar/jmonthcalendar-1.2.2/js/jMonthCalendar.js"></script>			
		<title>Admin Panel | Calendar Events</title>
	</head>
	<body>
		<div id="wrapper">
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/menu.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<p class="breadcrum">
				<a class="first" href="/admin/">Home</a> &raquo; 
				<a href="/admin/events/">Events</a> &raquo;
				<a href="#">Calendar Events</a>
				</p>
			<p class="linebreak"></p>
			<div id="main">
					<div id="jMonthCalendar"></div>		
			</div>							
			<div class="clr"></div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'admin/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

			<?php echo '
			<script type="text/javascript" language="javascript" src="calendar_events.php"></script>				
			<script type="text/javascript">
				$().ready(function() {

					var options = {
						height: 650,
						width: 980,
						navHeight: 25,
						labelHeight: 25,
						onMonthChanging: function(dateIn) {
						
							return true;
						},
						onEventLinkClick: function(event) { 
							$(\'#dialog\').html(event.Description);
							$("#dialog").dialog({width: 800, modal: true});
							return true; 
						}
					};
					
					$.jMonthCalendar.Initialize(options, events);
				});
				
			</script>			
			'; ?>
			
			</div>
			<div id="dialog" title="Calendar Event Description"></div>			
	</body>
</html>