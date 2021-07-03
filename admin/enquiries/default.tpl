<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		{include_php file='admin/includes/css.php'}
		{include_php file='admin/includes/javascript.php'}	
		<script type="text/javascript" language="javascript" src="default.js"></script>
		<title>Admin Panel | Enquiries</title>
	</head>
	<body>
		<div id="wrapper">
			{include_php file='admin/includes/header.php'}
			{include_php file='admin/includes/menu.php'}
			<p class="breadcrum"><a class="first" href="/admin/">Home</a> &raquo; <a href="/admin/enquiries/">Enquiries</a></p>
			<p class="linebreak"></p>
			<div id="main">
				<form id="detailsForm" name="detailsForm" action="/admin/enquiries/" method="post">
					<div class="colsearch">
						<div class="article">
							<h4><a href="#">Reference</a></h4>
							<input type="text" id="search_text" name="search_text~t"  size="20" value=""/>
						</div>
						</div>	
					<div class="colsearch">
						<div class="article">
							<h4><a href="#">Email</a></h4>
							<input type="text" id="enquiry_email" name="enquiry_email~t" size="20" value=""/>
						</div>		
					</div>	
					<div class="colsearch">
						<div class="article">
							<h4><a href="#">Entries Per Page</a></h4>
							<select class="small_field" id="per_page" name="per_page~i">
								<option value="" {if $perPageSelect eq ''} selected="selected"{/if}>All</option>
								<option value="5" {if $perPageSelect eq '5'} selected="selected"{/if}>5</option>
								<option value="10" {if $perPageSelect eq '10'} selected="selected"{/if}>10</option>
								<option value="20" {if $perPageSelect eq '20'} selected="selected"{/if}>20</option>
								<option value="30" {if $perPageSelect eq '30'} selected="selected"{/if}>30</option>
								<option value="40" {if $perPageSelect eq '40'} selected="selected"{/if}>40</option>
							</select>					
						</div>		
					</div>					
					<div class="colsearch last">	
						<a class="link" href="javascript:send_filter(1);">Search Clients</a>
					</div>				
				</form>
				<div class="clr"></div>
				<p class="linebreak"></p>
				<div class="clr"></div>
				<div id="tableContent" align="center">Loading....</div>
			</div>							
			<div class="clr"></div>
			{include_php file='admin/includes/footer.php'}
			</div>
	</body>
</html>