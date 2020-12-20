<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Shopping Cart</li>
      </ul>       
      <h1 class="heading1"><span class="maintext"> Shopping Cart</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Image</th>
            <th class="name">Product Name</th>
            <th class="quantity">Quantity</th>
              <th class="total">Action</th>
            <th class="price">Unit Price</th>
            <th class="total">Total</th>
           
          </tr>
          <form method="POST" action="">
          <?php 
          if ($product_cart != null)
          foreach($product_cart as $item) { ?>
          <tr>
            <td class="image"><a href="<?php echo 'detail.php?id=' . $item['id']; ?>"><img title="product" alt="product" <?php echo 'src="resources/upload/'.$item['image'].'"' ?> height="50" width="50"></a></td>
            <td class="name"><a href="<?php echo 'detail.php?id='. $item['id']; ?>"><?php echo $item["name"] ?></a></td>
            <td class="quantity"><?php echo $item["quantity"] ?>
            </td>
            <td class="total"> 
              <a href="<?php echo 'routes/user/del_product_cart.php?id='.$item['id'] ?>"><img class="tooltip-test" data-original-title="Remove"  src="public/user/img/remove.png" alt=""></a>
            </td>
           
            <td class="price"><?php echo number_format($item["price"],0,",",".") ?></td>
            <td class="total"><?php echo number_format($item["subtotal"],0,",",".") ?></td>
          </tr>
          <?php } ?>
        </form>
        </table>
      </div>
      <div class="container">
      <div class="pull-right">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold total-amount">Total :</span></td>
                <td><span class="bold total-amount"><?php echo number_format($total,0,",",".") ?></span></td>
              </tr>
            </table>
            <input type="submit" value="Place Order" class="btn btn-orange pull-right">
            <a class="btn btn-orange pull-right mr10" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Continue Shopping</a>
          </div>
        </div>
        </div>
    </div>
  </section>
</div>