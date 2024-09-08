<?php
include 'components/header.php';
include 'dashboard/Controller/class/product.class.php';

$product = new Product();

if(isset($_GET['SubCategory']) && isset($_GET['Category'])){
$category = $_GET['Category'];
$SubCategory = $_GET['SubCategory'];
$product->set('category',$category);
$product->set('sub_category',$SubCategory);
$items = $product->getByCategory();
}else{
    
    $items = $product->getProducts();
    
}




?>
<!-- End Header/Navigation -->

<div class="container mt-2 mb-0 d-flex flex-row  justify-content-between">
    <div style="width:90%">
        <span>
            <h4 class="mb=0" style="color:black;">
                <?php 
                if(isset($_GET['SubCategory']) && isset($_GET['Category'])){
                     echo $_GET['Category']."->".$_GET['SubCategory'] ;
                     } 
                     ?>
            </h4>
        </span>
    </div>
    <div>
        <select class="form-select-sm" aria-label="Default select example" class="" style="border:none;">
            <option selected>Sort By Latest</option>
            <option value="1">Price Low to high</option>
            <option value="2">Price High to Low</option>

        </select>
    </div>
</div>
<div class="container">

    <hr class="my-0" style="height:5px;color:#36584b;">

</div>

<div class="untree_co-section product-section before-footer-section pt-0">
    <div class="container">
        <div class=" row ">


     <?php   foreach($items as $item) { ?>
            <div class="col-6 col-md-3 col-sm-6 mb-5">
                <div class="product" style="text:green">

                    <a class="product-item" href="product_detail.php?id=<?php echo $item['pid'];?>">
                        <img src="dashboard/images/<?php echo $item['featured_img'];?>" class="product-thumbnail" width="200" height="250">
                        <h3 class="product-title"><?php echo $item['name'];?></h3>
                        <strong class="product-price">NPR <?php echo $item['price'];?></strong>

                        <span class="icon-cross">
                            <img src="images/cross.svg" class="img-fluid">
                        </span>
                        
                    </a>
                </div>
            </div>
        
<?php } ?>

        </div>

    </div>


</div>
</div>
</div>



<!-- Start Footer Section -->
<?php

include 'components/footer.php';
?>