<?php
require_once('../controllers/UserController.php');
$userControl = new UserController();
if ($userControl->editUser()) {
	session_start();
	$_SESSION['flash_message'] = "Sửa thành công!";
	$_SESSION['flash_level'] = "success";
}

header("Location: ../danh-sach-user.php");
?>