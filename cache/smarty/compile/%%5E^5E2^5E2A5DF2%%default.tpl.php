<?php /* Smarty version 2.6.20, created on 2015-04-18 12:30:56
         compiled from contact-us/default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Contact Us | Boards for Africa</title>
		<meta name="description" content="We are aiming steadily to dominate the regional market for wood board distributor as well as Gypsum boards, drywall systems and suspended ceilings. Contact Us. In Landsdowne, Philippi, Cape Town, Western Cape.">                
		<meta name="keywords" content="Wood Services, Melamine faced Chipboard, Medium Density Fibreboard, Standard and tempered Hardboard, Coasted Hardboard, Plastic Laminate, Veneered Chipboard, Marine and Pine Plywood, Handles fitting and hardware, Drawrunners, Hinges. In Landsdowne, Philippi, Cape Town, Western Cape.">
		<meta name="robots" content="index, follow">
		<meta name="revisit-after" content="21 days">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property="og:title" content="Boards for Africa"> 
		<meta property="og:image" content="http://www.boardsforafrica.co.za/images/boards_for_africa.jpg"> 
		<meta property="og:url" content="http://www.boardsforafrica.co.za">
		<meta property="og:site_name" content="Boards for Africa">
		<meta property="og:type" content="website">
		<meta property="og:description" content="Wood Services, Melamine faced Chipboard, Contact Us">
		<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/css.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
	</head>
	<body>
		<div id="wrapper">		
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/header.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
		
			<div id="content">
				<h1>Contact Us</h1>
						<?php if (isset ( $this->_tpl_vars['success'] )): ?> 
							<br />
							<?php if ($this->_tpl_vars['success'] == '1'): ?>
							<span style="color: green; font-weight: bold">Your email enquiry was sent successfully.</span>
							<?php else: ?>
							<span class="error">Your email enquiry was not sent, please try again.</span>
							<?php endif; ?>
						<?php endif; ?>				
				<table width="100%">
					<tr>
						<td valign="top">
						<form id="contactForm" name="contactForm" action="/contact-us/" method="post">
						<div class="article">
							<span>Full Name</span><br />
							<input type="text" value="" size="40" id="enquiry_name" name="enquiry_name" />
							 <?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_name'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_name']; ?>
</span><?php endif; ?>
						</div>	<br />
						<div class="article">
							<span>Email</span><br />
							<input type="text" value="" size="40" id="enquiry_email" name="enquiry_email" />
							<?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_email'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_email']; ?>
</span><?php endif; ?>
						</div>	<br />
						<div class="article">
							<span>Subject</span><br />
							<input type="text" value="" size="50" id="enquiry_subject" name="enquiry_subject" />
							<?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_subject'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_subject']; ?>
</span><?php endif; ?>
						</div><br />				
						<div class="article">
							<span>Message<?php if (isset ( $this->_tpl_vars['errorMessages']['enquiry_comments'] )): ?> - <span class="error"><?php echo $this->_tpl_vars['errorMessages']['enquiry_comments']; ?>
</span><?php endif; ?></span><br />
							<textarea cols="38" rows="5" id="enquiry_comments" name="enquiry_comments"></textarea>							
						</div>						
						<br /><button onclick="submitForm();">Send Equiry</button>	
						</form>
						</td>
						<td valign="top" align="right">
							<p>
								 Old Landsdowne Road, Landsdowne, Philippi (Old Philippi Station)<br />
								Cape Town, South Africa<br />
								Tel:  (021) 691 7660 or  (021) 691 9611, Fax: (021) 691 5161<br />
							</p>			
<small>View <a target="_blank" href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Old+Lansdowne+Road+Lansdowne,+Philippi+(Old+Philippi+Station)+Cape+Town,+South+Africa&amp;aq=&amp;sll=-34.049815,18.499432&amp;sspn=0.078653,0.168056&amp;t=h&amp;doflg=ptk&amp;ie=UTF8&amp;hq=Old+Lansdowne+Road+Lansdowne,+Philippi+(Old&amp;hnear=Philippi&amp;ll=-34.001531,18.545222&amp;spn=0.001239,0.002626&amp;z=14&amp;iwloc=A&amp;cid=12989740426452743923" style="color:#0000FF;text-align:left">Boards for Africa</a> in a larger map</small>
<br /><br />		
<iframe width="580" height="430" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Old+Lansdowne+Road+Lansdowne,+Philippi+(Old+Philippi+Station)+Cape+Town,+South+Africa&amp;aq=&amp;sll=-34.049815,18.499432&amp;sspn=0.078653,0.168056&amp;t=h&amp;doflg=ptk&amp;ie=UTF8&amp;hq=Old+Lansdowne+Road+Lansdowne,+Philippi+(Old&amp;hnear=Philippi&amp;ll=-34.001531,18.545222&amp;spn=0.001239,0.002626&amp;z=16&amp;iwloc=A&amp;cid=12989740426452743923&amp;output=embed"></iframe><br />
					
						</td>
					</tr>
					</table>
			</div>
			<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => "includes/footer.php", 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
	
		</div>		
		<?php echo '
			<script type="text/javascript">	
				function submitForm() {
					document.forms.contactForm.submit();					 
				}
			</script>
		'; ?>
			
	</body>
</html>