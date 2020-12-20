<?php
include("controllers/PageController.php");
$pageControl = new PageController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('views/user/blocks/head.html'); ?>
</head>
<!-- Header End -->
<header>
	<?php include("views/user/blocks/header.php"); ?>
	<script>
		document.getElementById('search-bar').style.display = 'none';
	</script>
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