<?php
    include("controllers/PageController.php");
    $pageControl = new PageController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require_once('views/user/blocks/head.html'); ?>
</head>
<body>
<!-- Header Start -->
<header>
    <?php include("views/user/blocks/header.php"); ?>
    <div class="container">
        <?php $pageControl->viewNavigation(); ?>
    </div>
</header>
<!-- Header End -->

<div id="maincontainer">
<?php
    //@yield('content')
    $pageControl->viewIndexPage();
?>
</div>
<?php
    //<!-- Footer -->
    include('views/user/blocks/footer.html');

    //<!-- javascript
       // ================================================== -->
    //<!-- Placed at the end of the document so the pages load faster -->
    include('views/user/blocks/scripts.html');
?>
</body>
</html>