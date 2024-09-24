<?php
include ('components/header.php');



require_once('./Controller/class/user.class.php');


$user = new User();
$users = $user->retrieveAll();


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
                <h3>Customers</h3>
                <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the
                    full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
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
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user){?>
                        <tr>
                            <td><?php echo $user['cid'] ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['phone'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td> <?php echo $user['city'] ?>,<?php echo $user['address'] ?></td>
                            <td class="td-last">
                                <a class="text-dark my-1 mx-1 delete-button" ><i
                                        class='fas fa-trash-alt' style='font-size:1.5rem;color:red'></i></a>
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
                    window.location.href = `../dashboard/Controller/deleteCustomer.php?id=${orderId}`;
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