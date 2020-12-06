<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="side-width">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
              <?php 
              if (!empty($menu_cate))
              foreach($menu_cate as $item_cate){ ?>
              <li>
                <a href="<?php echo 'product-cate.php?id='.$item_cate['id'] ?>"><?php echo $item_cate['name'] ?></a>
              </li>
              <?php } ?>
            </ul>
          </div>
         
          <!-- Latest Product -->  
          <div class="side-width">
            <h2 class="heading2"><span>Latest Products</span></h2>
            <ul class="bestseller">
              <?php foreach($latest_product as $item_latest_product){ ?>
              <li>
                <a href="<?php echo 'detail.php?id=' . $item_latest_product['id']; ?>">
                  <img width="50" height="50" src="<?php echo 'resources/upload/'.$item_latest_product['image']; ?>" alt="product" title="product"></a>
                <a class="product-name" href="<?php echo 'detail.php?id='. $item_latest_product['id']?>">
                <?php echo $item_latest_product['name'] ?></a>
                <span class="procategory"><?php echo $cate['name']; ?></span>
                <span class="price"><?php echo number_format($item_latest_product['price'],"0",",",".") ?></span>
              </li>
              <?php } ?>
            </ul>
          </div>
        </aside>
        <!-- Sidebar End-->
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
                          <span class="spiral"></span><a href="<?php echo 'routes/add_to_cart.php?id='.$item_product_cate['id'];?>" class="productcart">ADD TO CART</a>
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