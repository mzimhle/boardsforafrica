<?php/* Add this on all pages on top. */set_include_path($_SERVER['DOCUMENT_ROOT'].'/'.PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/library/classes/');require_once 'config/smarty.php';global $smarty;$smarty->display('includes/footer.tpl');?>