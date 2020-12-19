<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<ul class="nav navbar-top-links">
		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i>  <?php echo 'Welcome ' .  $_SESSION['username'] ?> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
				</li>
				<li class="divider"></li>
				<li><a href="routes/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
	</ul>
	<!-- /.navbar-top-links -->

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li>
					<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
				</li>
				<li>
					<a href="list_cate.php"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="list_cate.php">List Category</a>
						</li>
						<li>
							<a href="add_cate.php">Add Category</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
				<li>
					<a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="list_product.php">List Product</a>
						</li>
						<li>
							<a href="add_product.php">Add Product</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
				<li>
					<a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="list_user.php">List User</a>
						</li>
						<li>
							<a href="add_user.php">Add User</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav>