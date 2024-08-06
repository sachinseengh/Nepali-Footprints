<?php include('components/header.php'); ?>

<!-- Alert -->
<?php if(isset($_GET['alert'])): ?>
<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
    <strong> <?php echo $_GET['alert']; ?> </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<div class="container my-1  py-3">
    <h1 class="text-center title" style="font-family:'Inter, sans-serif">Your Account</h1>
    <div class="row justify-content-center mb-4">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="author-info">
                        <div class="author-pic text-center">
                            <img src="../images/person-1.png" alt="Maria Jones" class="img-fluid "
                                style="border-radius:200px; height:7rem">
                        </div>
                        <h3 class="font-weight-bold text-dark" >Maria Jones</h3>
                        <span class="position d-block mb-3  text-dark">CEO, Co-Founder, XYZ Inc.</span>
                    </div>


                    <div class="col-12">
                    <a href="edit.php" class="btn btn-primary">Edit</a>
                        <a  class="btn btn-danger delete-button">Delete</a>
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