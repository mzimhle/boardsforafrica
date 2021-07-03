<?php
//standard config include.
require_once 'config/database.php';
require_once 'config/smarty.php';

//include the Zend class for Authentification
require_once 'Zend/Session.php';

// Set up the namespace
$zfsession = new Zend_Session_Namespace('BackendLogin');

// Check if logged in, otherwise redirect
if (!isset($zfsession->identity) || is_null($zfsession->identity) || $zfsession->identity == '') {
	header('Location: /admin/login.php');
	exit();
} else {
	
	if(!isset($zfsession->loginData)) {
		//instantiate the users class
		require_once 'class/administrator.php';
		$users = new class_administrator();
		
		//get user details by username
		$usersData = $users->checkEmail($zfsession->identity);
		
		/* Save login in a session. */
		$zfsession->loginData = $usersData;
	}
}

global $zfsession;

$smarty->assign('loginData', $zfsession->loginData);
?>