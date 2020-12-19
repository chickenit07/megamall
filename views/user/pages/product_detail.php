<div id="maincontainer">
  <section id="product">
    <div class="container">      
      <!-- Product Details-->
      <div class="row">
       <!-- Product Image-->
        <div class="span5">
          <ul class="thumbnails mainimage">
            <li class="span5">
              <a  rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4" class="thumbnail cloud-zoom" <?php echo 'href="resources/upload/'.$product_detail['image'].'"' ?> >
                <img <?php echo 'src="resources/upload/'.$product_detail['image'].'"'?> alt="" title="">
              </a>
            </li>
		</ul>
        </div>
         <!-- Description -->
        <div class="span7">
          <div class="row">
            <div class="span7">
              <h1 class="product-name"><span class="bgnone"><?php echo $product_detail['name'] ?></span></h1>
              <div class="product-price">
                <div class="productpageprice">
                  <span class="spiral"></span>
                  <?php echo number_format($product_detail['price'],0,",",".") ?>
                </div>
              </div>
              <ul class="product-page-cart">
                <li><a class="cart" href="<?php echo 'routes/user/add_to_cart.php?id='.$product_detail['id'] ?>">ADD TO CART</a></li>
              </ul>
         <!-- Product Description tab & comments-->
         <div class="product-description">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="">Description</a>
                  </li>
                  <li><a href="">Specification</a>
                  </li>
                  <li><a href="">Review</a>
                  </li>
                  <li><a href="">Tags</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="description">
                    <h2>Product Information</h2>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                    <br>
                    <ul class="list-option3">
                      <li>Lorem ipsum dolor sit amet Consectetur adipiscing elit</li>
                      <li>Integer molestie lorem at massa Facilisis in pretium nisl aliquet</li>
                      <li>Nulla volutpat aliquam velit </li>
                      <li>Faucibus porta lacus fringilla vel Aenean sit amet erat nunc Eget porttitor lorem</li>
                    </ul>
                  </div>
                  <div class="tab-pane " id="specification">
                    <ul class="product-info">
                      <li>
                        <span class="product-infoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="product-infoleft"> Reward Points:</span> 60 </li>
                      <li>
                        <span class="product-infoleft"> Availability: </span> In Stock </li>
                      <li>
                        <span class="product-infoleft"> Old Price: </span> $500.00 </li>
                      <li>
                        <span class="product-infoleft"> Ex Tax: </span> $500.00 </li>
                      <li>
                        <span class="product-infoleft"> Product Code:</span> Product 16 </li>
                      <li>
                        <span class="product-infoleft"> Reward Points:</span> 60 </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="review">
                    <h3>Write a Review</h3>
                    <form class="form-vertical">
                      <fieldset>
                        <div class="control-group">
                          <label class="control-label">Text input</label>
                          <div class="controls">
                            <input type="text" class="span3">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Textarea</label>
                          <div class="controls">
                            <textarea rows="3"  class="span3"></textarea>
                          </div>
                        </div>
                      </fieldset>
                      <input type="submit" class="btn btn-orange" value="continue">
                    </form>
                  </div>
                  <div class="tab-pane" id="product-tag">
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum <br>
                      <br>
                    </p>
                    <ul class="tags">
                      <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> html</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> html</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> css</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> jquery</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> css</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> jquery</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> css</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> jquery</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> Webdesign</a>
                      </li>
                      <li><a href="#"><i class="icon-tag"></i> html</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
