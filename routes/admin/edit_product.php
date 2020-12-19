<?php
require_once('../../controllers/ProductController.php');
$productControl = new ProductController();
$productControl->editProduct();
session_start();
$_SESSION['flash_message'] = "Updated successfully!";
$_SESSION['flash_level'] = "success";
header("Location: ../../admin/list_product.php");
?>