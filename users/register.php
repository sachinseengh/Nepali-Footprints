<?php include('components/header.php'); ?>

<!-- Alert -->
<?php if(isset($_GET['alert'])): ?>
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
        <strong> <?php echo $_GET['alert']; ?> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container my-1 py-3">
    <h1 class="text-center title" style="font-family:'Inter, sans-serif">User Registration</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form class="row g-3" method="get" action="./operation/sign-up_process.php">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" name="password">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Name</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="name">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="inputCity" name="city">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity" name="city">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address">
                        </div>
                       
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <a href="login.php" class="btn btn-secondary">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>

<?php include('components/footer.php'); ?>