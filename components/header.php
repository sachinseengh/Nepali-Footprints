<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link href="./css/tiny-slider.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/additional.css" rel="stylesheet">
    <link rel="stylesheet" href="css/product_detail.css">
    <title>Nepali Footprints </title>
</head>

<body>


    <!-- Start Header/Navigation -->
    <!-- //color of first  nav bar using cchange -->
    <nav class="custom-navbar cchange navbar navbar-expand-md navbar-dark bg-dark" aria-label="Furni navigation bar">
    <div class="container my-1">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            Nepali FootPrints<span>.</span>
         
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mx-2 mb-2 mb-md-0">
                <form class="d-flex">
                    <input class="form-control me-2 form-control-transparent" type="search" placeholder="Search"
                        aria-label="Search">
                    <button type="submit" class="btn btn-custom">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-1">
                <?php if(isset($_SESSION['user'])): ?>
                <div class="author-pic text-center">
                    <img src="../images/person-1.png" alt="Maria Jones" class="img-fluid" style="border-radius:200px; height:2rem">
                </div>
                <?php else: ?>
                <li><a class="nav-link" href="./users/login.php"><img src="./images/user.svg" alt="Login"></a></li>
                <?php endif; ?>
                <li><a class="nav-link" href="cart.php"><img src="./images/cart.svg" alt="Cart"></a></li>
            </ul>
        </div>
    </div>
</nav>

    <!-- second navbar -->
	 <!-- reloacate using location -->
    <nav class="custom-navbar location  navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav  mb-2 mb-md-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li><a class="nav-link" href="shop.php">New Arrival</a></li>

                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            MENS
                        </a>
                        <ul class="dropdown-menu   drop-down" aria-labelledby="navbarDropdownMenuLink">
                            <li ><a class="dropdown-item" href="shop.php">Sports</a></li>
                            <li><a class="dropdown-item" href="shop.php">Casuals</a></li>
                            <li><a class="dropdown-item" href="shop.php">Boot</a></li>
                            <li><a class="dropdown-item" href="shop.php">Formal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           WOMENS
                        </a>
                        <ul class="dropdown-menu drop-down" aria-labelledby="navbarDropdownMenuLink">
                            <li ><a class="dropdown-item" href="shop.php">Sports</a></li>
                            <li><a class="dropdown-item" href="shop.php">Casuals</a></li>
                            <li><a class="dropdown-item" href="shop.php">Boot</a></li>
                            <li><a class="dropdown-item" href="shop.php">Formal</a></li>
                        </ul>
                    </li>
                    
                    <li><a class="nav-link" href="contact.php">Contact us</a></li>
                </ul>


            </div>
        </div>

    </nav>