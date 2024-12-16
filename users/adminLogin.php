<?php 

session_start();

if(isset($_SESSION['username'])){
    header('Location:../dashboard');
    exit();

}



include('./components/admin_header.php'); 
?>

<!-- Alert msg -->
<?php if(isset($_GET['alert'])): ?>
    <div class="alert alert-success alert-dismissible fade show my-3 mx-5 mb-0" role="alert">
        <strong> <?php echo $_GET['alert']; ?> </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="container" style="margin-top:20vh;">

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

    <h1 class="text-center title" style="font-family:'Inter, sans-serif">Admin Login</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <form id="loginForm" action="../dashboard/Controller/adminOperations/loginProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        
                        <div class="d-flex ">
                        <button type="submit" class="btn btn-primary " style="margin-left:2%;margin-top:2%;padding:1rem 5rem">Login</button>
                        </div>
                        <div class="d-flex">
                        <div class="mt-4" >
                        <a href="../" >Back to  Site </a>
                        </div>
                      
                        </div>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php include('./components/admin_footer.php'); 
?>
