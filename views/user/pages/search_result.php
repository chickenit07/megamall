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
                    <?php foreach($product_cate as $item_product_cate){ ?>
                    <li class="span3">
                      <a class="product-name" href="<?php echo 'detail.php?id='.$item_product_cate['id']?>">
                      <?php echo $item_product_cate['name'] ?></a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="<?php echo 'detail.php?id='.$item_product_cate['id']; ?>"><img alt="" src="<?php echo 'resources/upload/'.$item_product_cate['image']; ?>"></a>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="<?php echo 'routes/user/add_to_cart.php?id='.$item_product_cate['id'];?>" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="price-new"><?php echo number_format($item_product_cate['price'],0,",",".") ?></div>
                            <div class="price-old"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php } ?>
                  </ul>
                  <div class="pagination pull-right">
                    <ul>
                      <?php if($pagination->currentPage != 1) {?>
                      <li><a href="<?php echo 'product-cate.php?page='.($pagination->currentPage - 1).'&id='.$cate['id']; ?>">Prev</a></li>
                      <?php }
                      for($i=1; $i<=$pagination->lastPage ;  $i++) { ?>
                      <li class="<?php echo ($pagination->currentPage == $i) ? 'active':'' ?>">
                        <a href="<?php echo 'product-cate.php?page='.$i.'&id=' . $cate['id']; ?>"><?php echo $i ?></a>
                      </li>
                      <?php }
                      if($pagination->currentPage != $pagination->lastPage) {?>
                      <li><a href="<?php echo 'product-cate.php?page='.($pagination->currentPage + 1).'&id='.$cate['id']; ?>">Next</a></li>
                      <?php } ?>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>