<?php
include 'components/header.php';
include 'dashboard/Controller/class/product.class.php';

$product = new Product();

// Default fetching products based on category and subcategory
if (isset($_GET['SubCategory']) && isset($_GET['Category'])) {
    $category = $_GET['Category'];
    $SubCategory = $_GET['SubCategory'];
    $product->set('category', $category);
    $product->set('sub_category', $SubCategory);
    $items = $product->getByCategory();
} else {
    $items = $product->getProducts();
}



//sort with category
// Check if sorting is applied and adjust accordingly
if (isset($_GET['sort'])&&isset($_GET['Category'])&&isset($_GET['SubCategory'])) {
    $sort = $_GET['sort'];
    $cat= $_GET['Category'];
    $subcat= $_GET['SubCategory'];
   
    if ($sort == 'low_to_high') {
        // Sort products from low to high price
        $items = $product->getSortedProductsCategory('low_to_high',$cat,$subcat);
    } elseif ($sort == 'high_to_low') {
        // Sort products from high to low price
        $items = $product->getSortedProductsCategory('high_to_low',$cat,$subcat);
    }
}else{
    if (isset($_GET['sort'])) {
        $sort = $_GET['sort'];
       
        if ($sort == 'low_to_high') {
            // Sort products from low to high price
            $items = $product->getSortedProducts('low_to_high',);
        } elseif ($sort == 'high_to_low') {
            // Sort products from high to low price
            $items = $product->getSortedProducts('high_to_low',);
        }
    }

}
?>

<!-- End Header/Navigation -->

<div class="container mt-2 mb-0 d-flex flex-row justify-content-between">
    <div style="width:90%">
        <span>
            <h4 class="mb=0" style="color:black;">
                <?php 
                // Display current category and subcategory in header
                if (isset($_GET['SubCategory']) && isset($_GET['Category'])) {
                    echo $_GET['Category'] . " -> " . $_GET['SubCategory'];
                }else{
                    echo "New Arrival";
                }
                ?>
            </h4>
        </span>
    </div>
    <div>
    <select class="form-select-sm" aria-label="Sort By" onchange="window.location.href = this.value;" style="border:none;">
  
    <option value="?<?php echo isset($_GET['Category']) ? 'Category=' . $_GET['Category'] : ''; ?><?php echo isset($_GET['SubCategory']) ? '&SubCategory=' . $_GET['SubCategory'] : ''; ?>" <?php echo !isset($_GET['sort']) ? 'selected' : ''; ?>>Sort By Latest</option>

  
    <option value="?<?php echo isset($_GET['Category']) ? 'Category=' . $_GET['Category'] : ''; ?><?php echo isset($_GET['SubCategory']) ? '&SubCategory=' . $_GET['SubCategory'] : ''; ?>&sort=low_to_high" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'low_to_high' ? 'selected' : ''; ?>>Price Low to High</option>


    <option value="?<?php echo isset($_GET['Category']) ? 'Category=' . $_GET['Category'] : ''; ?><?php echo isset($_GET['SubCategory']) ? '&SubCategory=' . $_GET['SubCategory'] : ''; ?>&sort=high_to_low" <?php echo isset($_GET['sort']) && $_GET['sort'] == 'high_to_low' ? 'selected' : ''; ?>>Price High to Low</option>
</select>

    </div>
</div>

<div class="container">
    <hr class="my-0" style="height:5px;color:#36584b;">
</div>

<div class="untree_co-section product-section before-footer-section pt-0">
    <div class="container">
        <div class="row">
            <?php foreach ($items as $item) { ?>
            <div class="col-6 col-md-3 col-sm-6 mb-5">
                <div class="product" style="text:green">
                    <a class="product-item" href="product_detail.php?id=<?php echo $item['pid']; ?>">
                        <img src="dashboard/images/<?php echo $item['featured_img']; ?>" class="product-thumbnail" width="200" height="250">
                        <h3 class="product-title"><?php echo $item['name']; ?></h3>
                        <strong class="product-price">NPR <?php echo $item['price']; ?></strong>
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

<?php include 'components/footer.php'; ?>
