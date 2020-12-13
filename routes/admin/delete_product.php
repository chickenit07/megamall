<?php
require_once('../controllers/ProductController.php');
$productControl = new ProductController();
$productControl->deleteProduct();
session_start();
$_SESSION['flash_message'] = "Xóa sản phẩm thành công!";
$_SESSION['flash_level'] = "success";
header("Location: ../danh-sach-san-pham.php");
?>