<?php
require_once('../../controllers/CateController.php');
$cateControl = new CateController();
$cateControl->editCate();
session_start();
$_SESSION['flash_message'] = "Updated Successfully!!";
$_SESSION['flash_level'] = "success";
header("Location:  ../../admin/list_cate.php");
?>