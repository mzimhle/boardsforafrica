<?php
/* Add this on all pages on top. */
set_include_path($_SERVER['DOCUMENT_ROOT'].'/'.PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/library/classes/');

require_once 'config/smarty.php';
require_once 'config/database.php';
require_once 'class/enquiry.php';

/* Check posted data. */
if(count($_POST) > 0) {

	$errorMessages		= array();
	$data 					= array();
	$formValid				= true;
	$success				= NULL;
	$areaByName			= NULL;
	$enquiryObject		= new class_enquiry();
	
	if(isset($_POST['enquiry_comments']) && trim($_POST['enquiry_comments']) == '') {
		$errorMessages['enquiry_comments'] = 'message required';
		$formValid = false;		
	}
		
	if(isset($_POST['enquiry_name']) && trim($_POST['enquiry_name']) == '') {
		$errorMessages['enquiry_name'] = 'fullname required';
		$formValid = false;		
	}
	
	if(isset($_POST['enquiry_subject']) && trim($_POST['enquiry_subject']) == '') {
		$errorMessages['enquiry_subject'] = 'subject required';
		$formValid = false;		
	}
	
	if(isset($_POST['enquiry_email']) && trim($_POST['enquiry_email']) != '') {
		if(!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', trim($_POST['enquiry_email']))) {
			$errorMessages['enquiry_email'] = 'enter valid email';
		}	
	} else {
		$errorMessages['enquiry_email'] = 'email missing.';
	}		


	if(count($errorMessages) == 0 && $formValid == true) {

		$data 	= array();	
		$data['enquiry_name'] 				= trim($_POST['enquiry_name']);
		$data['enquiry_email'] 				= trim($_POST['enquiry_email']);
		$data['enquiry_subject'] 			= trim($_POST['enquiry_subject']);
		$data['enquiry_comments']		= trim($_POST['enquiry_comments']);
		$data['enquiry_reference']			= $enquiryObject->createReference();
		
		$success  = $enquiryObject->insert($data);
			
		require('Zend/Mail.php');
		
		$mail = new Zend_Mail();
		
		$smarty->assign('enquiryData', $data);	
		
		$message = $smarty->fetch('emails/enquiry.html');
		$mail->setFrom('info@boardsforafrica.co.za', 'Boards for Africa Enquiry'); //EDIT!!											
		$mail->addTo($data['enquiry_email']);
		$mail->addTo('info@boardsforafrica.co.za');
		$mail->setSubject('Boards for Africa Enquiry');
		$mail->setBodyHtml($message);			

		if($mail->send()) {
			$success = 1;
			$smarty->assign('success', $success);
		} else {
			$success = 0;
			$smarty->assign('success', $success);
		}
	}

	/* if we are here there are errors. */
	$smarty->assign('errorMessages', $errorMessages);	
	if((!isset($success)) || (isset($success) && $success == 0)) $smarty->assign('enquiryData', $_POST);		
	
}	
$smarty->display('contact-us/default.tpl', $cache);
?>