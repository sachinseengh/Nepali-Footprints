<?php
include 'components/header.php';
?>

<div class="container my-3 text-dark product-details">
    <!-- product section -->
    <section class="row">
        <!-- left side -->
        <div class="col-md-6">
            <div class="img-card">
                <img src="images/image-1.png" alt="" id="featured-image" class="featured-Img img-fluid">
                <!-- small img -->
                <div class="small-Card d-flex  justify-content-center mt-3">
                    <img src="images/product-1.png" alt="" class="small-Img img-fluid">
                    <img src="images/small-img-2.png" alt="" class="small-Img img-fluid">
                    <img src="images/small-img-3.png" alt="" class="small-Img img-fluid">

                </div>
            </div>
        </div>
        <!-- Right side -->
        <div class="col-md-6">
            <div class="product-info pt-3">
                <h3>LEVI'S® WOMEN'S XL TRUCKER JACKET</h3>
                <h5>Price: $140 <del>$170</del></h5>
                <ul style="padding-left: 1rem;">
                    <li>Color: White/Grey</li>
                    <li> Sole Material: Rubber</li>
                    <li> Closing: Lace-Up</li>
                    <li> Fit: Regular</li>
                    <li>Heel Shape: Flat</li>
                    <li>Brand: Flat</li>

                </ul>

                <div class="sizes my-3">
                    <p>Size:</p>
                    <select name="Size" id="size" class="form-select">
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
                </div>
                  <h6 class="text-success">67 in stock</h6>
                <div class="quantity my-3">
                    <input type="number" value="1" min="1" class="form-control w-25 d-inline-block">
                    <a href="cart.php" class="btn btn-primary ms-2">Add To cart</a>
                    <a href="cart.php" class="btn btn-secondary ms-2">Buy Now</a>
                </div>

                <div>
                    <p>Delivery:</p>
                    <p>Free standard shipping on orders over $35 before tax, plus free returns.</p>
                    <div class="delivery">
                        <p class="d-inline-block me-3">TYPE</p>
                        <p class="d-inline-block me-3">HOW LONG</p>
                        <p class="d-inline-block">HOW MUCH</p>
                    </div>
                    <hr>
                    <div class="delivery">
                        <p class="d-inline-block me-3">Standard delivery</p>
                        <p class="d-inline-block me-3">1-4 business days</p>
                        <p class="d-inline-block">$4.50</p>
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
<script src="js/product_detail.js"></script>
</body>

</html>