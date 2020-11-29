<?php
include("controllers/PageController.php");
$pageControl = new PageController();
session_start();
// echo "<pre>";
// var_dump($_SERVER);
// echo '</pre>';
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
        <!-- <?php $pageControl->viewNavigation(); ?> -->
    </div>
</header>
<!-- Header End -->

<div id="maincontainer">
<?php
//<!-- Slider Start-->
include('views/user/blocks/slider.php');
//<!-- Slider End-->

//<!-- Section Start-->
include('views/user/blocks/otherdetail.php');
//<!-- Section End-->

//@yield('content')
$pageControl->viewCartPage();
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