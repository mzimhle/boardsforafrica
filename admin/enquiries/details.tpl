<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		{include_php file='admin/includes/css.php'}
		{include_php file='admin/includes/javascript.php'}		
		<title>Admin | Enquiries | {$enquiryData.enquiry_reference}</title>
	</head>
	<body>
		<div id="wrapper">
			{include_php file='admin/includes/header.php'}
			{include_php file='admin/includes/menu.php'}
			<p class="breadcrum"><a class="first" href="/admin/">Home</a> &raquo; <a href="/admin/enquiries/">Enquiries</a> &raquo; <a href="#">{$enquiryData.enquiry_name}</a></p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="#" method="post">
					<div class="article">
						<h4><a href="#">Added</a></h4>
						<p class="short">
							{$enquiryData.enquiry_added|date_format}
						</p>
					</div>					
					<div class="article">
						<h4><a href="#">Full Name</a></h4>
						<p class="short">
							{$enquiryData.enquiry_name}
						</p>
					</div>
					<div class="article">
						<h4><a href="#">Email</a></h4>
						<p class="short">
							{$enquiryData.enquiry_email}
						</p>
					</div>	
					<div class="article">
						<h4><a href="#">Reference</a></h4>
						<p class="short">
							{$enquiryData.enquiry_reference}
						</p>
					</div>	
					<div class="article">
						<h4><a href="#">Subject</a></h4>
						<p class="short">
							{$enquiryData.enquiry_subject}
						</p>
					</div>						
					<div class="article">
						<h4><a href="#">Message</a></h4>
						<p class="short">
							{$enquiryData.enquiry_comments}
						</p>
					</div>																					
				</form>				
				<div class="clr"></div>
			</div>
			{include_php file='admin/includes/footer.php'}
		</div>
	</body>
</html>