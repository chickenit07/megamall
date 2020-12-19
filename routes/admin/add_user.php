<?php
require_once('../../controllers/UserController.php');
$userControl = new UserController();
session_start();
if ($userControl->addUser()) {
	$_SESSION['flash_message'] = "Added successfully!";
	$_SESSION['flash_level'] = "success";
} else {
	$_SESSION['flash_message'] = "Failed successfully!";
	$_SESSION['flash_level'] = "danger";
}
header("Location: ../../admin/list_cate.php");
?>