<?php
include('components/header.php');
?>

<div class="main-content container-fluid pt-1">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Products</h3>
                <?php if (isset($_GET['msg'])) { ?>
                <script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '<?php echo $_GET['msg']; ?>',
                    showConfirmButton: false,
                    timer: 1500
                });
                </script>
                <?php } ?>

                <?php if (isset($_GET['ErrMsg'])) { ?>
                <script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: '<?php echo $_GET['ErrMsg']; ?>',
                    showConfirmButton: false,
                    timer: 1500
                });
                </script>
                <?php } ?>
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
                <h4 class="card-title">Enter Product Details</h4>
            </div>
            <form action="./Controller/addProduct.php" method="post" enctype="multipart/form-data" id="productForm">
                <div class="card-body">
                    <div class="row">
                        <!-- Name of product -->
                        <div class="col-md-12 my-1">
                            <div class="form-group">
                                <label for="basicInput">Name of Product</label>
                                <input type="text" class="form-control" id="basicInput" name="name" required>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="col-md-12 my-1">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" required min="0">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="col-md-12 my-1">
                            <div class="card mb-0" style="box-shadow:none; padding-left:0px;">
                                <div class="card-body pb-0" style="padding-left:0px;">
                                    <p class="text-dark mb-0">Enter description</p>
                                    <div id="snow"></div>
                                    <textarea id="editor-content" name="desc" style="display:none;"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Category Selection -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicSelect">Category</label>
                                    <select class="form-control" id="basicSelect" name="category">
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Sub Category Selection -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basicSelect">Sub Category</label>
                                    <select class="form-control" id="basicSelect" name="sub_category">
                                        <option value="Sports">Sports</option>
                                        <option value="Casuals">Casuals</option>
                                        <option value="Boot">Boot</option>
                                        <option value="Formal">Formal</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Images -->
                        <h6>Images</h6>
                        <div>
                            <div class="form-file">
                                <label class="col-form-label">Featured Image (Required):</label>
                                <input type="file" class="form-file-input" id="fileInput1" name="featured_img" accept="image/*" required>
                                <img id="preview1" class="preview" src="" alt="Featured Image Preview" height="70" width="70" style="padding-top:0.5rem">
                            </div>
                        </div>

                        <div>
                            <div class="form-file">
                                <label class="col-form-label">Additional Image 1:</label>
                                <input type="file" class="form-file-input" id="fileInput2" name="add_img1" accept="image/*">
                                <img id="preview2" class="preview" src="" alt="Additional Image 1 Preview" height="70" width="70" style="padding-top:0.5rem">
                            </div>
                        </div>

                        <div>
                            <div class="form-file">
                                <label class="col-form-label">Additional Image 2:</label>
                                <input type="file" class="form-file-input" id="fileInput3" name="add_img2" accept="image/*">
                                <img id="preview3" class="preview" src="" alt="Additional Image 2 Preview" height="70" width="70" style="padding-top:0.5rem">
                            </div>
                        </div>

                        <div>
                            <div class="form-file">
                                <label class="col-form-label">Additional Image 3:</label>
                                <input type="file" class="form-file-input" id="fileInput4" name="add_img3" accept="image/*">
                                <img id="preview4" class="preview" src="" alt="Additional Image 3 Preview" height="70" width="70" style="padding-top:0.5rem">
                            </div>
                        </div>

                        <!-- Size and Quantity -->
                        <h6 class="my-3">Size and Quantity</h6>
                        <div class="d-flex row">
                            <?php
                            $sizes = [30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45];
                            foreach ($sizes as $size) {
                                echo "
                                <div class='col-6 col-md-3 col-sm-4 d-flex'>
                                    <div>
                                        <label class='col-form-label' style='font-family:times new roman;font-size:1.5rem'>$size</label>
                                    </div>
                                    <div class='mx-2 my-2'>
                                        <input type='number' id='size_$size' class='form-control' name='s_$size' min='0'>
                                    </div>
                                </div>";
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Submit buttons -->
                    <div class="my-3 d-flex justify-content-end">
                        <button class="btn btn-warning mx-2" type="reset">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.querySelector('#productForm').addEventListener('submit', function(event) {
    // Price and quantity validation
    var price = document.getElementById('price').value;
    if (price < 0) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Price',
            text: 'Price cannot be negative!'
        });
        event.preventDefault();
        return;
    }

    // Check all quantity fields for negative values
    var sizeFields = ['s_30', 's_31', 's_32', 's_33', 's_34', 's_35', 's_36', 's_37', 's_38', 's_39', 's_40', 's_41', 's_42', 's_43', 's_44', 's_45'];
    for (var i = 0; i < sizeFields.length; i++) {
        var sizeField = document.getElementById(sizeFields[i]).value;
        if (sizeField < 0) {
            Swal.fire({
                icon: 'error',
                title: 'Invalid Quantity',
                text: 'Quantity for size ' + sizeFields[i].split('_')[1] + ' cannot be negative!'
            });
            event.preventDefault();
            return;
        }
    }

    // Validate if a featured image is selected
    var featuredImage = document.getElementById('fileInput1').files.length;
    if (featuredImage === 0) {
        Swal.fire({
            icon: 'error',
            title: 'Featured Image Required',
            text: 'You must select a featured image!'
        });
        event.preventDefault();
    }
});

// Image preview functionality
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
