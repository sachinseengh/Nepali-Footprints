<?php

include ('components/header.php');

include ('./Controller/class/order.class.php');

$Order = new Order();

$orders= $Order->retrieve();



?>
            <div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Orders</h3>
                <!-- <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>OrderBy</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Total Amount</th>
                            <th>Phone</th>
                            <th>email</th>
                        <th>Delivery Address</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>order Date</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach($orders as $order) { ?>
                        <tr>
                            <td><?php echo $order['oid'];?></td>
                            <td><?php echo $order['customer_name'];?></td>
                            <td><?php echo $order['product'];?></td>
                            
                            <td><?php echo $order['quantity'];?></td>
                            <td><?php echo $order['size'];?></td>
                            <td>NPR <?php echo $order['price'];?></td>
                            <td>NPR <?php echo $order['total'];?></td>
                            <td><?php echo $order['phone'];?></td>
                            <td><?php echo $order['email'];?></td>
                           <td><?php echo $order['delivery_address'];?></td>
                            <td>
                            <span class="badge bg-primary">Shipped</span></td>
                            <td>

                            <div class="container">
                                            <a class="text-dark my-1 mx-1 "><i class='fas fa-pencil-alt' style='font-size:1.5rem'></i></a>
                                            
                                            </div>
                            </td>

                            <td><?php echo $order['order_date'];?></td>
                        </tr>
                        <?php } ?>
                      
                       
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

      <?php


include ('components/footer.php');
?>