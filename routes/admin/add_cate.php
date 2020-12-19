<?php
require_once('../../controllers/CateController.php');
$cateControl = new CateController();
$cateControl->addCate();
session_start();
$_SESSION['flash_message'] = "Added category successfully!";
$_SESSION['flash_level'] = "success";
header("Location: ../../admin/list_cate.php");
exit;
?>