<?php


session_abort();
session_start();

if(!isset($_SESSION['email']) && !isset($_SESSION['cid'])){

  header('Location:./users/login.php?Msg=Please Login First');


  exit();

}


include 'components/header.php';

include 'dashboard/Controller/class/cart.class.php';

$cart = new Cart();

$cart->set('cid',$_SESSION['cid']);
$items = $cart->getCart();


$total = $cart->totalAmount();

?>

		<div class="untree_co-section">
		    <div class="container">
		     
		      <div class="row">
		        <div class="col-md-6 mb-5 mb-md-0">
		          <h2 class="h3 mb-3 text-black">Billing Details</h2>
		          <div class="p-3 p-lg-5 border bg-white">
		            
				  <form id="orderForm" action="dashboard/Controller/placeOrder.php" method="get" >

				  
		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="fullname" class="text-black">Full Name <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="fname" name="fullname">
						<span class="nameErr text-danger" ></span>
		              </div>
		           
		            </div>

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="email" class="text-black">Email<span class="text-danger">*</span> </label>
		                <input type="text" class="form-control" id="email" name="email">
						<span class="emailErr text-danger"></span>
		              </div>
		            </div>

		          
					<div class="form-group row">
		              <div class="col-md-12">
		                <label for="daddress" class="text-black"> Delivery Address <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="daddress" name="daddress" placeholder="Delivery  address">
						<span class="daddressErr text-danger"></span>
		              </div>
		            </div>

		            

		            <div class="form-group row">
		              
		              <div class="col-md-6">
		                <label for="phone" class="text-black">Phone <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
						<span class="phoneErr text-danger"></span>
		              </div>
		            </div>

		          </div>
		        </div>
		        <div class="col-md-6">


		          <div class="row mb-5">
		            <div class="col-md-12">
		              <h2 class="h3 mb-3 text-black">Your Order</h2>
		              <div class="p-3 p-lg-5 border bg-white">
		                <table class="table site-block-order-table mb-5">
		                  <thead>
		                    <th>Product</th>
		                    <th>Total</th>
		                  </thead>
		                  <tbody>

						  <?php foreach($items as $item) { ?>
		                    <tr>
		                      <td><?php echo $item['product_name'];?> <strong class="mx-2">x</strong><?php echo $item['quantity'];?><strong class="mx-2">x</strong>Size-<?php echo $item['size'];?></td>
		                      <td>NPR <?php echo $item['total'];?></td>	
		                    </tr>
							<?php  } ?>
		                   
		                      <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
		                      <td class="text-black">NPR <?php echo $total ?></td>
		                    </tr>
		                    <tr>
		                      <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
		                      <td class="text-black font-weight-bold"><strong>NPR <?php echo $total ?></strong></td>
		                    </tr>
		                  </tbody>
		                </table>

		                <div class="border p-3 mb-3">
		               <button type="submit">Pay with Khalti</button>

		                  
		                </div>

		                <div class="border p-3 mb-3">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

		                  <div class="collapse" id="collapsecheque">
		                    <div class="py-2">
		                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		                    </div>
		                  </div>
		                </div>

		                <div class="border p-3 mb-5">
		                  <h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

		                  <div class="collapse" id="collapsepaypal">
		                    <div class="py-2">
		                      <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
		                    </div>
		                  </div>
		                </div>

		                <div class="form-group">
		                  
						  <button type="submit" class="btn btn-black btn-lg py-3 btn-block" id="placeOrderButton" name="submit">Place Order</button>
						  
<!-- place order swal is in user/validation/validation.js -->
		                </div>
						</form>
		              </div>
		            </div>
		          </div>

		        </div>
		      </div>
		      <!-- </form> -->
		    </div>
		  </div>

		  

<!-- place order swal is in user/validation/validation.js -->


<?php
include 'components/footer.php';

?>