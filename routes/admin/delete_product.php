<?php
require_once('../../controllers/ProductController.php');
$productControl = new ProductController();
$productControl->deleteProduct();
session_start();
$_SESSION['flash_message'] = "Deleted successfully!";
$_SESSION['flash_level'] = "success";
header("Location:  ../../admin/list_product.php");
?>