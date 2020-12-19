<?php
include("controllers/PageController.php");
$pageControl = new PageController();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php  require_once('views/user/blocks/head.html'); ?>
</head>
<!-- Header End -->
<header>
    <?php include("views/user/blocks/header.php"); ?>
    <div class="navbar" style="left: 40%; font-size: 30px; margin: 20px">
        <?php echo "Welcome to our shop!" ?>
    </div>
</header>

<div id="maincontainer">
<?php
    //@yield('content')
    $pageControl->viewLoginPage();
?>
</div>
<?php
    //<!-- Footer -->
    include('views/user/blocks/footer.html');
?>
</body>
</html>