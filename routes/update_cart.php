<?php
session_start();
include("../controllers/CartController.php");
$cartControl = new CartController();

if (isset($_GET['id'])) {
	$product_id = (int)$_GET['id'];
	$quantity = (int)$_GET['qty'];
	$cartControl->updateCart($product_id, $quantity);
}


?>