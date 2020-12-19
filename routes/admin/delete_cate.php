<?php
require_once('../../controllers/CateController.php');
$cateControl = new CateController();
$cateControl->deleteCate();
session_start();
$_SESSION['flash_message'] = "Deleted successfully!";
$_SESSION['flash_level'] = "success";
header("Location: ../../admin/list_cate.php");
?>