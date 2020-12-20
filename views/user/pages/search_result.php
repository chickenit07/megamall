<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <div class="row">        
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Category-->
                <section id="category-id">
                  <ul class="thumbnails grid">
                    <?php foreach($products as $product){ ?>
                    <li class="span3">
                      <a class="product-name" href="<?php echo 'detail.php?id='.$product['id']?>">
                      <?php echo $product['name'] ?></a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="<?php echo 'detail.php?id='.$product['id']; ?>"><img alt="" src="<?php echo 'resources/upload/'.$product['image']; ?>"></a>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="<?php echo 'routes/user/add_to_cart.php?id='.$product['id'];?>" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="price-new"><?php echo number_format($product['price'],0,",",".") ?></div>
                            <div class="price-old"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>