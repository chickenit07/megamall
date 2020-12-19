<?php
session_start();
require_once('../../controllers/UserController.php');
$userControl = new UserController();
if ($userControl->deleteUser()) {
	$_SESSION['flash_message'] = "Deleted Successfully!";
	$_SESSION['flash_level'] = "success";
} else {
	$_SESSION['flash_message'] = "You don't have any privileges to delete this user!!!";
	$_SESSION['flash_level'] = "danger";
}
header("Location: ../../admin/list_user.php");
?>