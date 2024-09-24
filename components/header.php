
<?php
session_abort();
session_start();

?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Nepali Footprints </title>
  <!-- Script to dynamically update stock based on size -->
  <script>
  $(document).ready(function(){
    $("#size").change(function(){
      var selectedSize = $(this).val();  // Get the selected size value
      var productId = "<?php echo $_GET['id']; ?>";  // Get the product ID from PHP

      if(selectedSize != "Select Size"){
        $.ajax({
          url: "./stockAjax/stock.php",  // PHP file to handle the request
          method: "GET",
          data: { size: selectedSize, id: productId },  // Send size and product ID
          success: function(response){
            $("#stock").html(response);  // Show stock data in the #stock element
          },
          error: function() {
            $("#stock").html("<span class='text-danger'>Error fetching stock data</span>");
          }
        });
      } else {
        $("#stock").html("");  // Clear stock information if no size is selected
      }
    });
  });
</script>




  
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
            <ul class="custom-navbar-nav navbar-nav ms-auto mx-2 mb-2 mb-md-0 ">
                <form id="searchForm" action='./searchpage.php' method="get" class="d-flex">
                    <input class="form-control me-2 form-control-transparent" id="searchInput" type="search" name="query"  placeholder="Search"
                        aria-label="Search" >
                  
                      <Button type="submit" class="btn btn-custom mt-2">  <i class="fa-solid fa-magnifying-glass"></i> </Button>
                   
                </form>
            </ul>

            <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-1 pt-1 gap-2">
            <?php
          
            if(isset($_SESSION['email'])): ?>
                <a href="./users/login.php" style="text-decoration:none"> <div class="author-pic text-center mr-2  mt-2" style="background-color:white;border-radius:200px; height:2rem;width:2rem;padding-top:0.1rem">
                       <!-- <img src="./images/person-1.png" alt="Maria Jones" class="img-fluid"
                            style="border-radius:200px; height:2rem"> -->
                            <span style="font-size:1.3rem;color:green" ><?php echo substr($_SESSION['email'],0,1);?></span>
                    </div></a>
                    <?php else: ?>
                    <li><a class="nav-link" href="./users/login.php"><img src="./images/user.svg"></a></li>
                    <?php endif; ?>
                    <li><a class="nav-link" href="./cart.php"><img src="./images/cart.svg"></a></li>
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
                            <li ><a class="dropdown-item" href="shop.php?Category=Men&SubCategory=Sports">Sports</a></li>
                            <li><a class="dropdown-item" href="shop.php?Category=Men&SubCategory=Casuals">Casuals</a></li>
                            <li><a class="dropdown-item" href="shop.php?Category=Men&SubCategory=Boot">Boot</a></li>
                            <li><a class="dropdown-item" href="shop.php?Category=Men&SubCategory=Formal">Formal</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                           WOMENS
                        </a>
                        <ul class="dropdown-menu drop-down" aria-labelledby="navbarDropdownMenuLink">
                            <li ><a class="dropdown-item" href="shop.php?Category=Women&SubCategory=Sports">Sports</a></li>
                            <li><a class="dropdown-item" href="shop.php?Category=Women&SubCategory=Casuals">Casuals</a></li>
                            <li><a class="dropdown-item" href="shop.php?Category=Women&SubCategory=Boot">Boot</a></li>
                            <li><a class="dropdown-item" href="shop.php?Category=Women&SubCategory=Formal">Formal</a></li>
                        </ul>
                    </li>
                    
                    <li><a class="nav-link" href="contact.php">Contact us</a></li>
                </ul>


            </div>
        </div>

    </nav>
   