<?php
require_once('../controllers/CateController.php');
$cateControl = new CateController();
$cateControl->deleteCate();
session_start();
$_SESSION['flash_message'] = "Xóa chủng loại thành công!";
$_SESSION['flash_level'] = "success";
header("Location: ../danh-sach-loai.php");
?>