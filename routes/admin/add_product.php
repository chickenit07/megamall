<?php
require_once('../../controllers/ProductController.php');
$productControl = new ProductController();
$productControl->addProduct();
session_start();
$_SESSION['flash_message'] = "Added product successfully!";
$_SESSION['flash_level'] = "success";
header("Location: ../../admin/list_product.php");
?>