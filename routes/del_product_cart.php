<?php
session_start();
include("../controllers/CartController.php");
$cartControl = new CartController();

if (isset($_GET['id'])) {
	$product_id = (int)$_GET['id'];
	$cartControl->deleteProduct($product_id);
}
header("Location: ../cart.php");

?>