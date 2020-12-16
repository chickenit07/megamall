<?php
require_once('../controllers/AdminPageController.php');
$pageControl = new AdminPageController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once('../views/admin/blocks/head.html') ?>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <?php require_once('../views/admin/blocks/navigation.php') ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Edit Category
                        </h1>
					</div>
					<div class="col-lg-12">
                        <?php require_once('../views/admin/blocks/flash.php') ?>
					</div>
					
                    <?php $pageControl->viewEditCatePage() ?>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <?php include_once('../views/admin/blocks/scripts.html') ?>
</body>
</html>