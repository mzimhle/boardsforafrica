<?php
/* Add this on all pages on top. */
set_include_path($_SERVER['DOCUMENT_ROOT'].'/'.PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/library/classes/');

/**
 * Standard includes
 */
require_once 'config/database.php';
require_once 'config/smarty.php';

require_once 'admin/includes/auth.php';

require_once 'class/enquiry.php';

$enquiryObject	= new class_enquiry();

if (!empty($_GET['reference']) && $_GET['reference'] != '') {

	$reference = (int)$_GET['reference'];

	$enquiryData = $enquiryObject->getByEnquiryId( $reference);
	
	if(count($enquiryData) > 0) {
		$smarty->assign('enquiryData', $enquiryData);
	} else {
		header('Location: /admin/enquiries/');
		exit;
	} 
} else {
	header('Location: /admin/enquiries/');
	exit;
}

 /* Display the template  */	
$smarty->display('admin/enquiries/details.tpl');
?>