<!-- Latest Product-->
<section id="latest" class="row">
  <div class="container">
    <h1 class="heading1"><span class="maintext">Latest Products</span></h1>
    <ul class="thumbnails">
      <?php foreach($latest_product as $item){ ?>
        <li class="span3">
		  <a class='product-name' href="<?php echo 'detail.php?id=' . $item['id']; ?>">
			  <?php echo $item['name'] ?>
		  </a>
          <div class="thumbnail">
			<a href="<?php echo 'detail.php?id='. $item['id']; ?>">
				<img alt='' src="resources/upload/<?php echo $item['image']?>">
			</a>
            <div class="pricetag">
              <span class="spiral"></span>
              <?php echo "<a href='routes/user/add_to_cart.php?id=".$item['id']."' class='productcart'>ADD TO CART</a>"; ?>
              <div class="price">
                <?php echo "<div class='price-new'>".number_format($item['price'],0,",",".")."</div>"; ?>
                <div class="price-old">123.456</div>
              </div>
            </div>
          </div>
        </li>
      <?php } ?>
      </li>
    </ul>
  </div>
</section>
<!-- Random Product-->
  <section id="random" class="row">
    <div class="container">
      <h1 class="heading1"><span class="maintext">May you like this</span></h1>
      <ul class="thumbnails">
      <?php
      foreach($random_product as $item){
        ?>
        <li class="span3">
          <a class='product-name' href="<?php echo 'detail.php?id=' .$item['id']; ?>"><?php echo $item['name'] ?></a>
          <div class="thumbnail">
            <a href="<?php echo 'detail.php?id='. $item['id']; ?>"><img alt='' src="resources/upload/<?php echo $item['image'] ?>"></a>
            <div class="pricetag">
              <span class="spiral"></span>
              <?php echo "<a href='routes/user/add_to_cart.php?id=".$item['id']."' class='productcart'>ADD TO CART</a>"; ?>
              <div class="price">
              <?php echo "<div class='price-new'>".number_format($item['price'],0,",",".")."</div>";
              ?>
                <div class="price-old">123.456</div>
              </div>
            </div>
          </div>
        </li>
        <?php } ?>
        </li>
      </ul>
    </div>
  </section>