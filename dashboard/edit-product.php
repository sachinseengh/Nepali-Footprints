<?php
include('components/header.php');

require_once('./Controller/class/product.class.php');
$product = new Product();
$product->set('pid', $_GET['id']);
$item = $product->getById();

?>

<div class="main-content container-fluid pt-1">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Products</h3>



            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title ">Enter Product Details</h4>
            </div>
            <form action="./Controller/editProduct.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row">
                        <!-- id -->
                        <div class="col-md-12 my-1">
                            <div class="form-group">
                                <label for="basicInput">Id</label>
                                <input type="text" class="form-control" id="basicInput" name="pid"
                                    value=<?php echo $_GET['id'] ?> readonly>
                            </div>
                        </div> <!-- Name of product -->
                        <div class="col-md-12 my-1">
                            <div class="form-group">
                                <label for="basicInput">Name of Product</label>
                                <input type="text" class="form-control" id="basicInput" name="name"
                                    value=<?php echo $item->name; ?>>
                            </div>
                        </div>

                        <!--  -->
                        <div class="col-md-12 my-1">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" name="price"
                                    value=<?php echo $item->price; ?>>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="col-md-12 my-1">
                            <div class="card mb-0" style="box-shadow:none; padding-left:0px;">
                                <div class="card-body pb-0" style="padding-left:0px;">
                                    <p class="text-dark mb-0">Enter description</p>
                                    <div id="snow">
                                        <!-- Quill editor will be rendered here -->
                                    </div>
                                    <textarea id="editor-content" name="desc"
                                        style="display:none;"><?php echo $item->description; ?></textarea>
                                </div>
                            </div>
                        </div>




                    </div>


                    <!--  Category Selection-->
                    <div class="row">
                        <div class="card-content pl-0 col-md-6">
                            <div class="card-body p-0 pt-2">
                                <div class="row">
                                    <div class=" mb-0">
                                        <h6>Category</h6>
                                        <fieldset class="form-group mb-0">
                                            <select class="form-select" id="basicSelect" name="category">

                                                <option <?php if($item->sub_category == "Men")echo "Selected";?>>Men
                                                </option>
                                                <option <?php if($item->sub_category == "Women")echo "Selected";?>>Women
                                                </option>

                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  sub Category Selection-->
                        <div class="card-content pl-0 col-md-6">
                            <div class="card-body p-0 pt-2">
                                <div class="row">
                                    <div class=" mb-4">
                                        <h6>Sub Category</h6>
                                        <fieldset class="form-group">
                                            <select class="form-select" id="basicSelect" name="sub_category">


                                                <option <?php if($item->sub_category == "Sports")echo "Selected";?>>
                                                    Sports</option>
                                                <option <?php if($item->sub_category == "Casuals")echo "Selected";?>>
                                                    Casuals</option>
                                                <option <?php if($item->sub_category == "Boot")echo "Selected";?>>Boot
                                                </option>
                                                <option <?php if($item->sub_category == "Formal")echo "Selected";?>>
                                                    Formal</option>





                                            </select>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="mb-0">Images</h6>
                    <div>
                        <div class="d-flex row ">
                            <div class="col-12">
                                <div>
                                    <label class="col-form-label p-1">Featured Image:</label>
                                </div>
                                <div>
                                    <!-- <div class="form-file">
                      <input type="file" class="form-file-input" id="fileInput1" name="featured_img" accept="image/*" >
                      <img id="preview1" class="preview" src="./images/<?php echo $item->featured_img; ?>" alt="Featured Image Preview" height="70" width="70" style="padding-top:0.5rem;">
                    
                     
                    </div> -->
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="fileInput1" name="featured_img"
                                            accept="image/*">
                                        <img id="preview1" class="preview"
                                            src="./images/<?php echo $item->featured_img; ?>"
                                            alt="Featured Image Preview" height="70" width="70"
                                            style="padding-top:0.5rem;">
                                        <input type="hidden" name="existing_img"
                                            value="<?php echo $item->featured_img; ?>">
                                    </div>



                                </div>
                            </div>
                        </div>

                        <!-- Additional Image 1 -->
                        <div class="col-12">
                            <div class="form-group align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Additional Image 1:</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="fileInput2" name="add_img1"
                                            accept="image/*">
                                        <img id="preview1" class="preview" src="./images/<?php echo $item->add_img1; ?>"
                                            alt="Additional Image 1 Preview" height="70" width="70"
                                            style="padding-top:0.5rem;">
                                        <input type="hidden" name="existing_add_img1"
                                            value="<?php echo $item->add_img1; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Image 2 -->
                        <div class="col-12">
                            <div class="form-group align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Additional Image 2:</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="fileInput3" name="add_img2"
                                            accept="image/*">
                                        <img id="preview2" class="preview" src="./images/<?php echo $item->add_img2; ?>"
                                            alt="Additional Image 2 Preview" height="70" width="70"
                                            style="padding-top:0.5rem;">
                                        <input type="hidden" name="existing_add_img2"
                                            value="<?php echo $item->add_img2; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Image 3 -->
                        <div class="col-12">
                            <div class="form-group align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label">Additional Image 3:</label>
                                </div>
                                <div class="col-lg-9 col-9">
                                    <div class="form-file">
                                        <input type="file" class="form-file-input" id="fileInput4" name="add_img3"
                                            accept="image/*">
                                        <img id="preview3" class="preview" src="./images/<?php echo $item->add_img3; ?>"
                                            alt="Additional Image 3 Preview" height="70" width="70"
                                            style="padding-top:0.5rem;">
                                        <input type="hidden" name="existing_add_img3"
                                            value="<?php echo $item->add_img3; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <h6 class="my-3">Size and Quantity</h6>
                    <div class="d-flex row ">
                        <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">30</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_30"
                                    value=<?php echo $item->s_30 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">31</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_31"
                                    value=<?php echo $item->s_31 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">32</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_32"
                                    value=<?php echo $item->s_32 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">33</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_33"
                                    value=<?php echo $item->s_33 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">34</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_34"
                                    value=<?php echo $item->s_34 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">35</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_35"
                                    value=<?php echo $item->s_35 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">36</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_36"
                                    value=<?php echo $item->s_36 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">37</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_37"
                                    value=<?php echo $item->s_37 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">38</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_38"
                                    value=<?php echo $item->s_38 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">39</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_39"
                                    value=<?php echo $item->s_39 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">40</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_40"
                                    value=<?php echo $item->s_40 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">41</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_41"
                                    value=<?php echo $item->s_41 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">42</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_42"
                                    value=<?php echo $item->s_42 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">43</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_43"
                                    value=<?php echo $item->s_43 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">44</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_44"
                                    value=<?php echo $item->s_44 ?>>
                            </div>
                        </div>
                        <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                            <div>
                                <label class="col-form-label"
                                    style="font-family:times new roman;font-size:1.5rem">45</label>
                            </div>
                            <div class="mx-2 my-2">
                                <input type="number" id="last-name" class="form-control" name="s_45"
                                    value=<?php echo $item->s_45 ?>>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 d-flex justify-content-end">
                        <button class="btn btn-warning mx-2">Cancel</button>
                        <button class="btn btn-success">Submit</button>
                    </div>
            </form>


        </div>
    </div>
</div>
</section>
<!-- Basic Inputs end -->



</div>
<script>
    document.querySelectorAll('.form-file-input').forEach((input) => {
      input.addEventListener('change', function(event) {
        const fileInput = event.target;
        const previewId = fileInput.id.replace('fileInput', 'preview');
        const preview = document.getElementById(previewId);

        if (fileInput.files && fileInput.files[0]) {
          const reader = new FileReader();

          reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block'; // Show the image preview
          }

          reader.readAsDataURL(fileInput.files[0]);
        } else {
          preview.src = '';
          preview.style.display = 'none'; // Hide the image preview if no file is selected
        }
      });
    });
  </script>

<?php

include('components/footer.php');
?>