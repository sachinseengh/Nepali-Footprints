<?php
include 'components/header.php';
include 'dashboard/Controller/class/product.class.php';

$id = $_GET['id'];
$product =  new Product();

$product->set('pid',$id);

$item = $product->getById();

?>

<div class="container my-3 px-5 text-dark product-details">

    <!-- product section -->
    <section class="row">
        <!-- left side -->
        <div class="col-md-6">
            <div class="img-card">
                <img src="dashboard/images/<?php echo $item->featured_img; ?>" alt="" id="featured-image" class="featured-Img img-fluid">
                <!-- small img -->
                <div class="small-Card d-flex  justify-content-center mt-3">
                    <img src="dashboard/images/<?php echo $item->add_img1; ?>" alt="" class="small-Img img-fluid">
                    <img src="dashboard/images/<?php echo $item->add_img2; ?>" alt="" class="small-Img img-fluid">
                    <img src="dashboard/images/<?php echo $item->add_img3; ?>" alt="" class="small-Img img-fluid">

                </div>
            </div>
        </div>
        <!-- Right side -->
    
        <div class="col-md-6">
            <div class="product-info pt-3">
                <h3><?php echo $item->name; ?></h3>
                <h5>NPR <?php echo $item->price; ?> 
                <!-- <del>$170</del> -->
            </h5>
                <ul style="padding-left: 1rem;">
                <?php echo htmlspecialchars_decode($item->description); ?>

                </ul>
                <form id="sizeForm" action="dashboard/Controller/addCart.php" method="GET">

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                
                <input type="hidden" name="price" value="<?php echo $item->price; ?>">
                <div class="sizes my-3">
                    <p>Size:</p>
                    <select name="Size" id="size" class="form-select" required onChange="removeErr()">
                    <option selected value="Select Size">Select Size</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        
                    </select>
                    <span id="sizeErr" class="text-danger"></span>
                </div>
                  <h6 id="stock" class="text-success" ></h6>
                <div class="quantity my-3">
                    <input type="number" value="1" min="1" class="form-control w-25 d-inline-block" name="quantity">
                    <button type="submit" class="btn btn-primary ms-2">Add To Cart</button>
                    <button type="submit" class="btn btn-secondary ms-2">Buy Now</button>
                </div>
</form>
                <div>
                    <p>Delivery:</p>
                    <p>Free standard shipping on orders over Rs 3500 before tax, plus free returns.</p>
                    <div class="delivery">
                        <p class="d-inline-block me-3">TYPE</p>
                        <p class="d-inline-block me-3">HOW LONG</p>
                        <p class="d-inline-block">HOW MUCH</p>
                    </div>
                    <hr>
                    <div class="delivery">
                        <p class="d-inline-block me-3">Standard delivery</p>
                        <p class="d-inline-block me-3">1-4 business days</p>
                        <p class="d-inline-block">Rs 150</p>
                    </div>
                   
                    <hr>
                    <div class="delivery">
                        <p class="d-inline-block me-3">Pick up in store</p>
                        <p class="d-inline-block me-3">1-3 business days</p>
                        <p class="d-inline-block">Free</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>

<!-- script tags -->
 <script>


    const sizeForm = document.addEventListener('submit',function(e){
        const size  = document.getElementById("size").value;
        
        
        const sizeErr = document.getElementById("sizeErr");
        
        const stock  = document.getElementById("stock");
        const stockValue = stock.textContent;
        console.log(stockValue);
       
        
        

        if(size === "Select Size"){
            e.preventDefault();
            sizeErr.textContent ="Please Select Size";
        }
        
        if( stockValue === "Out of Stock"){
            e.preventDefault();
        }
        
       
       
    })
    function removeErr(){
        const sizeErr = document.getElementById("sizeErr");
        sizeErr.textContent="";
    }

 </script>
<script src="js/product_detail.js"></script>
</body>

</html>