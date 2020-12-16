<?php
require_once('../../controllers/UserController.php');
$userControl = new UserController();
$login = $userControl->checkLogin();
if ($login) {
	header("Location: ../../admin/index.php");
} else {
	session_start();
	$_SESSION['errors'] = array('Invalid!');
	header("Location: ../../admin/login.php");
}
?>