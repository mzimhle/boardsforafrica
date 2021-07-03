<?php

/* Add this on all pages on top. */
set_include_path($_SERVER['DOCUMENT_ROOT'].'/'.PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/library/classes/');

/*** Standard includes  */
require_once 'config/database.php';
require_once 'config/smarty.php';

require_once 'admin/includes/auth.php';

require_once 'class/enquiry.php';

$enquiryObject	= new class_enquiry();

/* Pagination. */
$currentPage	= (isset($_GET['page']) && $_GET['page'] !='' ) ? (int)$_GET['page'] : 1;
$perPage 		= (isset($_GET['per_page~i']) && !is_null($_GET['per_page~i']) && $_GET['per_page~i'] != '' && is_numeric($_GET['per_page~i'])) ? $_GET['per_page~i'] : 30;
$listedPages	= 20;
$scrollingStyle	= 'Sliding';

/* Filter. */
$filter						= "enquiry_deleted = 0";
$filter_fields				= "search_text~t, enquiry_email~t"; // filter fields to remember
$filter_search_fields 		= "enquiry_reference~t, enquiry_email~t"; // should be text only fields
$select_score 				= '';
$order_score 				= '';

require_once 'admin/includes/filter.php';

global $filter;

/* Setup Pagination. */

$enquiryData = $enquiryObject->getPaginated($filter,'enquiry.enquiry_added DESC', $currentPage, $perPage, $listedPages, $scrollingStyle);
 
$enquiryItems = $enquiryData->getCurrentItems();

$smarty->assign_by_ref('enquiryItems', $enquiryItems);

$paginator = $enquiryData->setView()->getPages();

$smarty->assign_by_ref('paginator', $paginator);

/* End Pagination Setup. */

/* display template */
$smarty->display('admin/enquiries/html.tpl');

?>