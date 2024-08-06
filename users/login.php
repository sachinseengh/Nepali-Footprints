<?php include('./components/header.php'); 
?>

<!-- Alert msg -->
<?php if(isset($_GET['alert'])): ?>
    <div class="alert alert-success alert-dismissible fade show my-3 mx-5 mb-0" role="alert">
        <strong> <?php echo $_GET['alert']; ?> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container py-5">
    <h1 class="text-center title" style="font-family:'Inter, sans-serif">User Login</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form action="../dashboard/Controller/userOperations/loginProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="register.php" class="btn btn-secondary">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php include('./components/footer.php'); ?>