<?php
session_start();
require_once('../controllers/UserController.php');
$userControl = new UserController();
if ($userControl->deleteUser()) {
	$_SESSION['flash_message'] = "Xóa thành công!";
	$_SESSION['flash_level'] = "success";
} else {
	$_SESSION['flash_message'] = "Bạn không có quyền xóa user này!";
	$_SESSION['flash_level'] = "danger";
}
header("Location: ../danh-sach-user.php");
?>