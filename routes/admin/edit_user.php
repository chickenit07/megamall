<?php
require_once('../../controllers/UserController.php');
$userControl = new UserController();
if ($userControl->editUser()) {
	session_start();
	$_SESSION['flash_message'] = "Updated Successfully!!";
	$_SESSION['flash_level'] = "success";
}

header("Location: ../../admin/list_user.php");
?>