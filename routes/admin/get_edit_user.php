<?php
session_start();
require_once('../../controllers/UserController.php');
$userControl = new UserController();
if ($userControl->getEditUser($_GET['id'])) {
	header("Location: ../sua-user.php?id=".$_GET['id']);
	echo '<pre>';
	var_dump($_REQUEST);
	var_dump($_SERVER);
	echo '</pre>';
} else {
	$_SESSION['flash_message'] = "Bạn ko có quyền sửa user này!";
	$_SESSION['flash_level'] = "danger";
	header("Location: ../danh-sach-user.php");
}
?>