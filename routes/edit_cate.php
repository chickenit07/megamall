<?php
require_once('../controllers/CateController.php');
$cateControl = new CateController();
$cateControl->editCate();
session_start();
$_SESSION['flash_message'] = "Sửa chủng loại thành công!";
$_SESSION['flash_level'] = "success";
header("Location: ../danh-sach-loai.php");
?>