<?php
require_once('../../controllers/ProductController.php');
$productControl = new ProductController();
echo $productControl->deleteImageDetail();
?>