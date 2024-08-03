<?php

include('components/header.php');

require_once('./Controller/class/product.class.php');


$product = new Product();
$items = $product->retrieve();


?>

            <div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Manage Products</h3>

            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Featured Image</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php   foreach($items as $item ) { ?>
                        <tr>
                            <td><?php echo $item['pid']; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <td><img src="./images/<?php echo $item['featured_img']; ?>" alt="" srcset="" height="70rem" width="70rem"></td>
                            <td>
                            <div class="container">
                                
                                            <a class="text-dark my-1 mx-1" href="edit-product.php?id=<?php echo $item['pid'];?> "><i class='fas fa-pencil-alt' style='font-size:1.5rem'></i></a>
                                            <a class="text-dark my-1 mx-1" href="delete-product.php?id=<?php echo $item['pid'];?> "><i class='fas fa-trash-alt' style='font-size:1.5rem;color:red'></i></a>
                                            </div>
                            </td>
                        </tr>
                        <?php } ?>
                       
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

       <?php

       include ('components/footer.php');
       ?>