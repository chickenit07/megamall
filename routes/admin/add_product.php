<?php
require_once('../../controllers/ProductController.php');
$productControl = new ProductController();
$productControl->addProduct();
session_start();
$_SESSION['flash_message'] = "Thêm sản phẩm thành công!";
$_SESSION['flash_level'] = "success";
header("Location: ../danh-sach-san-pham.php");
?>