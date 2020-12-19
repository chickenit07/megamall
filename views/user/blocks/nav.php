<?php
// echo '<pre>';
// var_dump($menus);
// echo '</pre>';
?>

<div id="categorymenu">
	<nav class="subnav">
		<ul class="nav-pills categorymenu">
			<li><a href="index.php">Trang chủ</a></li>
			<?php
			foreach ($menus as $menu)
				if ($menu['parent_id'] == 0) {
					$menu_level1 = ($menu['has_sub'] == 'true') ? $menus[$menu['sub_cate'][0]] : $menu; 
					?>
				<li>
					<a href="<?php echo 'product-cate.php?id='. $menu_level1['id'] ?>">
						<?php echo $menu['name']; ?>
					</a>
					<?php
					if ($menu['has_sub'] == 'true') { ?>
						<div>
							<ul>
								<?php
								foreach ($menu['sub_cate'] as $menu_level2_id) {
									$menu_level2 = $menus[$menu_level2_id];
								?>
									<li>
										<a href="<?php echo 'product-cate.php?id=' . $menu_level2['id']?>"><?php echo $menu_level2['name']; ?></a>
									<?php } ?>
							</ul>
						</div>
					<?php } ?>
				</li>
			<?php }  ?>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
</div>