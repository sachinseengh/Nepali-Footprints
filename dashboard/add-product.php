<?php
include('components/header.php');

?>

            <div class="main-content container-fluid pt-1">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Add Products</h3>
                            <p class="text-subtitle text-muted">Fill data or information using input is better than
                                writing by pen.</p>
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

                        <div class="card-body">
                            <div class="row">
                                <!-- Name of product -->
                                <div class="col-md-12 my-1">
                                    <div class="form-group">
                                        <label for="basicInput">Name of Product</label>
                                        <input type="text" class="form-control" id="basicInput"
                                            placeholder="Enter email">
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-md-12 my-1">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" placeholder="Enter price">
                                    </div>
                                </div>
                                <!-- Description -->
                                <div class="col-md-12 my-1">
                                    <div class="card mb-0 " style="box-shadow:none;padding-left:0px;">
                                        <div class="card-header p-0" style="padding-left:0px;">
                                            
                                        </div>
                                        <div class="card-body pb-0" style="padding-left:0px;">
                                            <p class="text-dark mb-0">Enter description </p>
                                            <div id="snow">
                                                <p>Hello World!</p>
                                                <p>Some initial <strong>bold</strong> text</p>
                                                <p><br></p>

                                            </div>
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
                                                    <select class="form-select" id="basicSelect">
                                                        <option selected>Select Gender</option>
                                                        <option>Men</option>
                                                        <option>Women</option>

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
                                                <h6>Category</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="basicSelect">
                                                        <option selected>Select Category</option>
                                                        <option>Sports</option>
                                                        <option>Casuals</option>
                                                        <option>Boot</option>
                                                        <option>Formal</option>

                                                    </select>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="mb-0">Images</h6>
                            <div >
                            <div class="d-flex row ">
                                <div class="col-12">
                                    <div >
                                        <label class="col-form-label p-1">Featured Image :</label>
                                    </div>
                                    <div >
                                        <div class="form-file">
                                            <input type="file" class="form-file-input" id="customFile">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 ">
                                <div class="form-group  align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <label class="col-form-label">Additional Image 1:</label>
                                    </div>
                                    <div class="col-lg-9 col-9">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input" id="customFile">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 ">
                                <div class="form-group align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <label class="col-form-label">Additional Image 2:</label>
                                    </div>
                                    <div class="col-lg-9 col-9">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input" id="customFile">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group col align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <label class="col-form-label">Additional Image 3:</label>
                                    </div>
                                    <div class="col-lg-9 col-9">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input" id="customFile">

                                        </div>
                                    </div>
                                </div>
                            </div>
</div>

                            <h6 class="my-3">Size and Quantity</h6>
                            <div class="d-flex row ">
                            <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                                    <div>
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">30</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                            >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">31</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                            >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">32</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                            >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">33</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                            >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">34</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                            >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4 d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">35</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                            >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">36</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">37</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">38</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">39</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">40</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">41</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">42</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">43</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">44</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            <div class="col-6 col-md-3 col-sm-4  d-flex  ">
                                    <div >
                                        <label class="col-form-label" style="font-family:times new roman;font-size:1.5rem">45</label>
                                    </div>
                                    <div class="mx-2 my-2" >
                                        <input type="number" id="last-name" class="form-control" name="fname"
                                             >
                                    </div> 
                            </div>
                            </div>

<div class="my-3 d-flex justify-content-end">
                            <button class="btn btn-warning mx-2">Cancel</button>
                            <button class="btn btn-success">Submit</button>
                            </div>


                        </div>
                    </div>
                </div>
                </section>
                <!-- Basic Inputs end -->



            </div>

        <?php
include('components/footer.php');
?>