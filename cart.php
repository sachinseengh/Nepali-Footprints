<?php
include 'components/header.php';

include 'dashboard/Controller/class/cart.class.php';

$cart = new Cart();

$items = $cart->retrieve();


$total = $cart->totalAmount();

?>

<div class="container mt-2 mb-0 " >
<h1>Error halne eta</h1>
			<span ><h4 class="mb=0" style="color:black;">Cart</h4></span>
			<hr class="my-0">
			<div>
		

		<div class="untree_co-section before-footer-section cart-margin">
      
            <div class="container">
              <div class="row mb-3">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php foreach($items as $item){ ?>
                        <tr>
                          <td class="product-thumbnail">
                            <img src="dashboard/images/<?php echo $item['featured_img']?>" alt="Image" class="img-fluid">
                          </td>
                          <td class="product-name">
                            <h2 class="h5 text-black"><?php echo $item['product_name']?></h2>
                          </td>
                          <td class="price">NPR <?php echo $item['product_price']?></td>
                          <td>
                            <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                              <div class="input-group-prepend">
                               <a href="dashboard/Controller/decreaseCart.php?id=<?php echo $item['cartId'];?>" class="btn btn-outline-black decrease" type="button" >&minus;</a>
                              </div>
                              <input type="number" min="1" disabled class="form-control text-center quantity-amount"  value="<?php echo $item['quantity'];?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                              <div class="input-group-append">
                                <a href="dashboard/Controller/increaseCart.php?id=<?php echo $item['cartId'];?>" class="btn btn-outline-black increase" type="button" >&plus;</a>
                              </div>
                            </div>
        
                          </td>
                          <!-- <td class="total-amount"><?php echo $item['total']?></td> -->
                          <td class="total-amount">NPR <?php echo $item['total']?> </td>
                          <td><a href="dashboard/Controller/deletecart.php?id=<?php  echo $item['pid']?>" class="btn btn-black btn-sm">X</a></td>
                        </tr>
      <?php } ?>
                        
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="container mx-2">
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-2">
                    <!-- <div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Update Cart</button>
                    </div> -->
                    <div class="col-md-6">
                      <button class="btn btn-outline-black btn-sm btn-block">Continue Shopping</button>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="col-md-12">
                      <label class="text-black h4" for="coupon">Coupon</label>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-md-4">
                      <button class="btn btn-black">Apply Coupon</button>
                    </div>
                  </div> -->
                </div>
                <div class="col-md-6 px-3 pt-2">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-1">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black"> <?php echo $total ;?></strong>
                        </div>
                      </div>
                      <div class="row mb-2">
                        <div class="col-md-6">
                          <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black"> <?php echo $total ;?></strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>



		<!-- Start Footer Section -->
<?php

include 'components/footer.php';



?>