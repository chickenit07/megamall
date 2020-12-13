<?php
require_once('../controllers/ProductController.php');
$productControl = new ProductController();
$productControl->editProduct();
session_start();
$_SESSION['flash_message'] = "Sửa sản phẩm thành công!";
$_SESSION['flash_level'] = "success";
header("Location: ../danh-sach-san-pham.php");
?>