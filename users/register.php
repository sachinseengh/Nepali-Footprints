<?php 
include('components/header.php');




?>

<div class="container my-1 py-3">
    <h1 class="text-center title" style="font-family:'Inter, sans-serif">User Registration</h1>
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
            
                <div class="card-body">
                    <form id='registerForm'  action="../dashboard/Controller/userOperations/registerProcess.php" class="row g-3" method="post">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <span id="emailErr" style="color:red;"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <span id="passwordErr" style="color:red;"></span>
                        </div>
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name"  name="name">
                            <span id="nameErr" style="color:red;"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                            <span id="phoneErr" style="color:red;"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city">
                            <span id="cityErr" style="color:red;"></span>
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor" name="address">
                            <span id="addressErr" style="color:red;"></span>
                        </div>
                       
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" name="submit">Register</button>
                            <a href="login.php" class="btn btn-secondary">Login</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<br>


<?php include('components/footer.php'); ?>