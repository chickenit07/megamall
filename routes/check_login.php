<?php
require_once('../controllers/UserController.php');
$userControl = new UserController();
$login = $userControl->checkLogin();
if ($login) {
	header("Location: ../danh-sach-san-pham.php");
} else {
	session_start();
	$_SESSION['errors'] = array('Tên đăng nhập hoặc mật khẩu không đúng!');
	header("Location: ../dang-nhap.html");
}
?>