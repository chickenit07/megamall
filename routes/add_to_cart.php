<?php
include("../controllers/CartController.php");
$cartControl = new CartController();
session_start();
if (isset($_GET['id'])) {
	$product_id = $_GET['id'];
	$cartControl->addToCart($product_id);
}
header("Location: ../cart.php");
?>