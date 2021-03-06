<?php
/* Add this on all pages on top. */
set_include_path($_SERVER['DOCUMENT_ROOT'].'/'.PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'/library/classes/');

error_reporting(E_ALL);

/**
 * Standard includes
 */
require_once 'config/database.php';
require_once 'config/smarty.php';

require_once 'includes/auth.php';

global $zfsession;

// Clear the identity from the session

$zfsession->identity = $zfsession->loginData = NULL;

unset($zfsession->identity, $zfsession->loginData);

//redirect to login page
header('Location: /admin/login.php');
exit;
?>