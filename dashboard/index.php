<?php

if(isset($_COOKIE['username'])){  
    session_start(); 
    $_SESSION['username']= $_COOKIE['username'];
}

if(!isset($_SESSION['username'] ) ){

    header('Location:../users/adminLogin.php'); 
    exit(); 
}

include 'components/header.php';

require_once ('Controller/class/order.class.php');

$order  = new Order();

$orders = $order->retrieve();
$activeOrders = $order->TotalActiveOrders();
$deliveredOrders = $order->TotalDeliveredOrders();
$TotalRevenue= $order->TotalRevenue();


require_once ('Controller/class/product.class.php');

$product  = new Product();

$products = $product->TotalProduct();
$Totalproducts = $product->TotalProductQuantity();


require_once ('Controller/class/user.class.php');

$customer  = new User();

$customers = $customer->TotalCustomer();



?>
            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Dashboard</h3>
                
                </div>
                <section class="section">
                    <div class="row mb-2">
                        <div class="col-12 col-md-2">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="">
                                        <div class='px-3 py-3 '>
                                            <h3 class='card-title'> Shoe</h3>
                                            <div class="card-right ">
                                                <p style="color:black;font-family:Times New Roman"><?php echo $products[0][0] ?> </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                        <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="">
                                        <div class='px-3 py-3 '>
                                            <h3 class='card-title'> Quantity</h3>
                                            <div class="card-right ">
                                                <p style="color:black;font-family:Times New Roman"><?php echo $Totalproducts[0][0] ?> </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                        <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="">
                                        <div class='px-3 py-3 '>
                                            <h3 class='card-title'>Revenue</h3>
                                            <div class="card-right ">
                                                <p style="color:black;font-family:Times New Roman">Rs.<?php echo $TotalRevenue['total']; ?> </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                        <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="">
                                        <div class='px-3 py-3 '>
                                            <h3 class='card-title'>Active Ord.</h3>
                                            <div class="card-right ">
                                                <p style="color:black;font-family:Times New Roman"><?php echo $activeOrders['activeOrders']; ?> </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                        <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="">
                                        <div class='px-3 py-3 '>
                                            <h3 class='card-title'>Delivered</h3>
                                            <div class="card-right ">
                                                <p style="color:black;font-family:Times New Roman"><?php echo $deliveredOrders['deliveredOrders']; ?> </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                        <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="">
                                        <div class='px-3 py-3 '>
                                            <h3 class='card-title'>Customers</h3>
                                            <div class="card-right ">
                                                <p style="color:black;font-family:Times New Roman"><?php echo $customers[0][0] ?> </p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12">
                          
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">Latest Orders </h4>
                                    <div class="d-flex ">
                                        <i data-feather="download"></i>
                                    </div>
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <div class="table-responsive">
                                        <table class='table mb-0' id="table1">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php foreach($orders as $order){?>
                                                <tr>
                                                    <td><?php echo $order['oid'] ?></td>
                                                    <td><?php echo $order['product'] ?></td>
                                                    <td><?php echo $order['quantity'] ?></td>
                                                    <td><?php echo $order['price'] ?></td>
                                                    <td><?php echo $order['total'] ?></td>
                                                    
                                                    <td>
                                                        <span class="badge bg-success"><?php echo $order['status'] ?></span>
                                                    </td>
                                                </tr>

                                                <?php } ?>
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
            </div>

   <?php

include 'components/footer.php';

?>