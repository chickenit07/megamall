<?php
require_once('../controllers/UserController.php');
$userControl = new UserController();
session_start();
if ($userControl->addUser()) {
	$_SESSION['flash_message'] = "Thêm user thành công!";
	$_SESSION['flash_level'] = "success";
} else {
	$_SESSION['flash_message'] = "Thêm user thất bại!";
	$_SESSION['flash_level'] = "danger";
}
header("Location: ../danh-sach-user.php");
?>