<?php 


include('components/header.php'); 
require_once('../dashboard/Controller/class/user.class.php');
 
    $user= new User();
    $user->set('cid',$_SESSION['cid']);

    $row= $user->retrieve();
?>





<div class="container my-3  px-4" >
    <h1 class="text-center title" style="font-family:'Inter, sans-serif">Update Details</h1>
    <div class="row justify-content-center">
        <div class="card px-0" style="width: 100%; max-width: 40rem;"> <!-- Adjusted max-width here -->
            <div class="card-body">
                <form class="row g-3" method="post" action="../dashboard/Controller/userOperations/editProcess.php">
                    <div class="col-md-6"> <!-- Changed to use Bootstrap's responsive classes -->
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" value="<?php echo $row['email']; ?>" disabled name="email">
                    </div>
                    <div class="col-md-6"> <!-- Changed to use Bootstrap's responsive classes -->
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" value="<?php echo $row['password']; ?>" name="password">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Name</label>
                        <textarea class="form-control" id="inputAddress" name="name"><?php echo $row['name']; ?></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Phone</label>
                        <textarea class="form-control" id="inputAddress" name="phone"><?php echo $row['phone']; ?></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address</label>
                        <textarea class="form-control" id="inputAddress2" name="address"><?php echo $row['address']; ?></textarea>
                    </div>
                    <div class="col-12">
                        <label for="inputCity" class="form-label">City</label>
                        <textarea class="form-control" id="inputCity" name="city"><?php echo $row['city']; ?></textarea>
                    </div>
                    <div class="col-12 text-center">
                         <a href="profile.php" class="btn btn-success">Cancel</a>
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


<?php include('components/footer.php'); ?>