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
  								<li><a class="checkout" href="#">CheckOut</a>
  								</li>
  								<?php
										if (!isset($_SESSION['username']))
											echo '<li><a class="login" href="login.php">Login</a></li>';
										else echo '<li>
														<a Welcome ' . $_SESSION['username']. '</a>
														  <a class="logout href="logout.php>Log out </a>
												</li>';									
										?>
  							</ul>
  						</div>
  					</div>
  				</div>
  				<!-- Top Nav End -->
  			</div>
  		</div>
  	</div>
  </div>