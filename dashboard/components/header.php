<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Nepali Footprints</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/simple-datatables.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .swal2-popup {
      font-size: 0.8rem; /* Adjust font size */
      width: 50%; /* Adjust width */
      max-width: 90%;
      max-height:80%; /* Ensure the width is responsive */
    }

    .swal2-title {
      font-size: 1.2rem; /* Adjust title font size */
    }

    .swal2-html-container {
      font-size: 0.9rem; /* Adjust text font size */
    }

    .swal2-confirm {
      padding: 0.5rem 1rem; /* Adjust button padding */
    }

    .swal2-cancel {
      padding: 0.5rem 1rem; /* Adjust button padding */
    }

    .swal-confirm-btn {
    margin-right: 10px;
    margin-left:10px; /* Adjust the margin as needed */
}

.swal-cancel-btn {
    margin-left: 10px; /* Adjust the margin as needed */
}
.order-form {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.order-form label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    color: #333;
}

.order-form .input-field, .order-form .select-field {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

.order-form .submit-btn {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

.order-form .submit-btn:hover {
    background-color: #0056b3;
}


    
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <!-- <img src="assets/images/logo.svg" alt="" srcset="">
                      -->
                    <h3 >Nepali Footprints.</h3>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item active ">

                            <a href="index.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Manage Shop</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="add-product.php">Add Products</a>
                                </li>
                                <li>
                                    <a href="manage-product.php">Manage products</a>
                                </li>

                                <li>
                                    <a href="manage-orders.php">Manage Orders</a>
                                </li>
                                <li>
                                    <a href="manage-customer.php">Manage Customer</a>
                                </li> 
                            </ul>
                        </li>
                        <li class="sidebar-item  ">

                            <a href="../" class='sidebar-link'>
                                <i data-feather="globe" width="20"></i>
                                <span>Visit Webiste</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">

                            <a href="../users/adminEdit.php" class='sidebar-link'>
                                <i data-feather="globe" width="20"></i>
                                <span>Change Password</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">

                            <a href="./Controller/adminOperations/logout.php" class='sidebar-link'>
                            <i class="fa-solid fa-right-from-bracket"></i>
                          <span>Logout</span>
                            </a>
                            </li>
                        

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                      
                
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                             
                                <div class="d-none d-md-block d-lg-inline-block">Hi, <?php echo $_COOKIE['username'];?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                              
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
