<?php
require_once('../controllers/UserController.php');
$userControl = new UserController();
$login = $userControl->checkLogin();
if ($login) {
	header("Location: ../../index.php");
} else {
	session_start();
	$_SESSION['errors'] = array('Please try another one!');
	header("Location: ../../login.php");
}
?>