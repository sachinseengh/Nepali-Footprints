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
                        <a href="login.php" class="btn btn-danger">Delete</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php include('components/footer.php'); ?>