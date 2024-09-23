<?php 

session_abort();
session_start();
if(isset($_SESSION['email'] ) && isset($_SESSION['cid'])){

    header('Location:./profile.php'); 
    exit(); 
}





include('./components/header.php'); 
?>

<!-- Alert msg -->
<?php if(isset($_GET['alert'])): ?>
    <div class="alert alert-success alert-dismissible fade show my-3 mx-5 mb-0" role="alert">
        <strong> <?php echo $_GET['alert']; ?> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container py-5">

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

    <h1 class="text-center title" style="font-family:'Inter, sans-serif">User Login</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form id="loginForm" action="../dashboard/Controller/userOperations/loginProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <a href="register.php" class="btn btn-secondary">Register</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div class="mt-4" >
                        <a href="../" >Back to  Site </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php include('./components/footer.php'); ?>