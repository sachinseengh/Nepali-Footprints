<?php

include ('components/header.php');

include ('./Controller/class/order.class.php');

$Order = new Order();

$orders= $Order->retrieve();



?>
<div class="main-content container-fluid">

<?php if (isset($_GET['msg'])) { ?>
                <script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '<?php echo $_GET['msg']; ?>',
                    showConfirmButton: false,
                    timer: 1500
                });
                </script>
                <?php } ?>

                <?php if (isset($_GET['ErrMsg'])) { ?>
                <script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: '<?php echo $_GET['ErrMsg']; ?>',
                    showConfirmButton: false,
                    timer: 1500
                });
                </script>
                <?php } ?>
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
                            <th>Status</th>
                            <th>order Date</th>
                            <th>OrderBy</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Total Amount</th>
                            <th>Phone</th>
                            <th>email</th>
                            <th>Delivery Address</th>

                            <th>Edit</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($orders as $order) { ?>
                        <tr>
                            <td><?php echo $order['oid'];?></td>
                            <td>
                            <a class="text-dark  mx-1 " href="./editOrderStatus.php?id=<?php echo $order['oid']; ?>"><p class="badge bg-<?php if( $order['status']=="Active"){
                                        echo "primary";
                            }elseif($order['status']=="Confirmed"){
                                echo "secondary";
                            }elseif($order['status']=="Shipped"){
                                echo "warning";
                            }elseif($order['status']=="Delivered"){
                                echo "success";
                        }else{
                            echo "danger";
                        }?>"><?php echo $order['status'] ?>   </p><i class='fas fa-pencil-alt '
                            style='font-size:1rem'></i></a></td>
                            
                            
                            <td><?php echo $order['order_date'];?></td>
                            <td><?php echo $order['customer_name'] .'('. $order['cid'] .')' ?></td>
                            <td><?php echo $order['product'];?></td>

                            <td><?php echo $order['quantity'];?></td>
                            <td><?php echo $order['size'];?></td>
                            <td>NPR <?php echo $order['price'];?></td>
                            <td>NPR <?php echo $order['total'];?></td>
                            <td><?php echo $order['phone'];?></td>
                            <td><?php echo $order['email'];?></td>
                            <td><?php echo $order['delivery_address'];?></td>


                            <td>
                            <div class="container">
                                <a class="text-dark my-1 mx-1 delete-button " ><i class='fas fa-trash-alt '
                                        style='font-size:1.5rem;color:red;'></i></a>
                            </div>
                            </td>


                        </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
<script>


document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            
            // Get the current row and find the order ID from the row
            const orderRow = button.closest('tr');
            const orderId = orderRow.querySelector('td').textContent; // Assuming the first <td> has the order ID

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-danger swal-confirm-btn',
                    cancelButton: 'btn btn-secondary swal-cancel-btn'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, proceed with deletion and send the order ID in the URL
                    window.location.href = `../dashboard/Controller/deleteOrder.php?id=${orderId}`;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your Account is safe :)',
                        'error'
                    );
                }
            });
        });
    });
});

</script>
<?php


include ('components/footer.php');
?>