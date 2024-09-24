<?php 



session_start();
if(!isset($_SESSION['email'] ) && !isset($_SESSION['cid'])){

    header('Location:./login.php'); 
    exit(); 
}


include('components/header.php'); 

require_once ('../dashboard/Controller/class/order.class.php');
require_once ('../dashboard/Controller/class/user.class.php');


$user = new User();
$user->set('cid',$_SESSION['cid']);
$userOne = $user->retrieve();


$order = new Order();
$order->set('cid',$_SESSION['cid']);

$orders = $order->retrieveOne();
?>



<div class="container my-1  py-3">


<?php if (isset($_GET['Msg'])) { ?>
                <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-right",
                    showConfirmButton: false,
                    timer: 1000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "success",
                    title: '<?php echo $_GET['Msg']; ?>'
                });
                </script>
                <?php } ?>

                <?php if (isset($_GET['ErrMsg'])) { ?>
                <script>
               const Toast = Swal.mixin({
                    toast: true,
                    position: "top-right",
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                });
                Toast.fire({
                    icon: "error",
                    title: '<?php echo $_GET['ErrMsg']; ?>'
                });
                </script>
                <?php } ?> 
    <h1 class="text-center title" style="font-family:'Inter, sans-serif">Your Account</h1>
    <div class="row justify-content-center mb-4">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="author-info">
                        <!-- <div class="author-pic text-center">
                            <img src="../images/person-1.png" alt="Maria Jones" class="img-fluid "
                                style="border-radius:200px; height:7rem">
                        </div> -->

                       
                    </div>
                    <div class="d-flex justify-content-between flex-row">
                    <div>
                    <h3 class="font-weight-bold text-dark" ><?php echo $userOne['name']; ?></h3>
                    <span class="position d-block mb-3  text-dark"><?php echo $userOne['address']; ?></span>

                    </div>
                    <div >
                    <a href="edit.php" class="btn btn-primary">Edit</a>
                        <a  class="btn btn-danger delete-button">Delete</a>
                        <a  href="../cart.php" class="btn btn-warning">Cart</a>
                        <a href="../dashboard/Controller/userOperations/logout.php" class="btn btn-secondary ">Logout</a>
                    </div>
                    </div>
                    
                    <div class="my-3">
                        <h2 class=" btn  btn-secondary">Your Orders</h2>

                        <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            
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
                            <td><?php echo $order['product'] ?></td>
                            <td><?php echo $order['quantity'] ?></td>
                            <td>Rs <?php echo $order['price'] ?></td>
                            <td>Rs <?php echo $order['total'] ?></td>
                            <td >  <p class="badge bg-success"> <?php echo $order['status'] ?></p></td>
                            
            </div>
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
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();
            

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
                    // If confirmed, proceed with deletion
                    window.location.href = `../dashboard/Controller/userOperations/deleteProcess.php`;
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


<?php include('components/footer.php'); ?>