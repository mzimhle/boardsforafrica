<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		{include_php file='admin/includes/css.php'}
		<title> Admin Panel</title>
	</head>
	<body>
		<div id="wrapper">
			{include_php file='admin/includes/header.php'}
			{include_php file='admin/includes/menu.php'}
			<p class="linebreak"></p>			
			<div id="main">		
				<div class="col">
					<div class="article">&nbsp;</div>				
					<div class="article">
						<h4><a href="/admin/enquiries/">Manage Enquiries</a></h4>
						<p class="short line">Manage enquiries that have been sent via the website, as well as respond to them and filter the search.<a href="/admin/enquiries/">&raquo;</a></p>
					</div>				
				</div>					
			</div>
			{include_php file='admin/includes/footer.php'}
		</div>
	</body>
</html>