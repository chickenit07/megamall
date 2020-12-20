  <div class="headerstrip">
  	<div class="container">
  		<div class="row">
  			<div class="span12">
  				<a href="index.php" class="logo pull-left"><img src="public/user/img/logo.png" alt="SimpleOne" title="SimpleOne"></a>
  				<!-- Top Nav Start -->
  				<div class="pull-left">
  					<div class="navbar" id="topnav">
  						<div class="navbar-inner">
  							<ul class="nav">
  								<li><a class="home active" href="index.php">Home</a>
  								</li>
  								<li><a class="shoppingcart" href="cart.php">Shopping Cart</a>
  								</li>
  								<li><a class="checkout" href="#">Place Order</a>
  								</li>
  								<?php
									if (!isset($_SESSION['username']))
										echo '<li><a class="login" href="login.php">Login</a></li>';
									else echo '<li><a class="logout" href="logout.php">Log out as ' .$_SESSION['username'] . '</a></li>';
									?>
									<li>
									</li>
  							</ul>
  						</div>
  					</div>
  				</div>
  				<!-- Top Nav End -->
  			</div>
  		</div>
  		<div class="row">
  			<script type="text/javascript" src="./public/user/js/validateSearch.js"></script>
  			<div class="span12">
  				<form action="./search-result.php" onsubmit="return validateForm()" method="get">
  					<input id="search" name="search" type="text" class="form-control" style="width: 92%; margin:5px;" placeholder="Search...">
  					<span class="input-group-btn">
  						<button class="btn btn-default" type="submit">
  							<i class="fa fa-search"></i>
  						</button>
  				</form>
  				</span>
  			</div>
  			<!-- /input-group -->
  		</div>
  	</div>
  </div>