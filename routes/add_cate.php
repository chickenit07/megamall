<?php
require_once('../controllers/CateController.php');
$cateControl = new CateController();
$cateControl->addCate();
session_start();
$_SESSION['flash_message'] = "Thêm chủng loại thành công!";
$_SESSION['flash_level'] = "success";
header("Location: ../danh-sach-loai.php");
?>