<?php include('components/admin_header.php'); 
require_once('../dashboard/Controller/class/admin.class.php');
    
    $admin= new Admin();
    $admin->set('email','sachinseengh@gmail.com');


    $row= $admin->retrieve();
    


?>

<div class="container my-5 px-4" style="padding-top:8%">
    <h1 class="text-center title" style="font-family:'Inter, sans-serif">Change Password</h1>
    <div class="row justify-content-center">
        <div class="card px-0" style="width: 100%; max-width: 40rem;"> <!-- Adjusted max-width here -->
            <div class="card-body">
                <form class="row g-3" method="post" action="../dashboard/Controller/adminOperations/editProcess.php">
                    <div class=""> <!-- Changed to use Bootstrap's responsive classes -->
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" value="<?php echo $row['username']; ?>" disabled name="email">
                    </div>
                    <div class=""> <!-- Changed to use Bootstrap's responsive classes -->
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                 
                    <div class="col-12 text-center">
                         <a href="../dashboard/" class="btn btn-success">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>


<?php include('components/admin_footer.php'); ?>