<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/quill/quill.bubble.css">
    <link rel="stylesheet" href="assets/vendors/quill/quill.snow.css">

    <link rel="stylesheet" href="assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">


</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <!-- <img src="assets/images/logo.svg" alt="" srcset="">
                      -->
                    <h3>Nepali Footprints.</h3>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item  ">

                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  active  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Manage Shop</span>
                            </a>
                            <ul class="submenu ">
                                <li>
                                    <a href="add-product.php">Add Products</a>
                                </li>
                                <li>
                                    <a href="manage-product.php">Manage products</a>
                                </li>

                                <li>
                                    <a href="manage-customer.php">Manage Customer</a>
                                </li>



                            </ul>

                        </li>

                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Components</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="component-alert.html">Alert</a>
                                </li>

                                <li>
                                    <a href="component-badge.html">Badge</a>
                                </li>

                                <li>
                                    <a href="component-breadcrumb.html">Breadcrumb</a>
                                </li>

                                <li>
                                    <a href="component-buttons.html">Buttons</a>
                                </li>

                                <li>
                                    <a href="component-card.html">Card</a>
                                </li>

                                <li>
                                    <a href="component-carousel.html">Carousel</a>
                                </li>

                                <li>
                                    <a href="component-dropdowns.html">Dropdowns</a>
                                </li>

                                <li>
                                    <a href="component-list-group.html">List Group</a>
                                </li>

                                <li>
                                    <a href="component-modal.html">Modal</a>
                                </li>

                                <li>
                                    <a href="component-navs.html">Navs</a>
                                </li>

                                <li>
                                    <a href="component-pagination.html">Pagination</a>
                                </li>

                                <li>
                                    <a href="component-progress.html">Progress</a>
                                </li>

                                <li>
                                    <a href="component-spinners.html">Spinners</a>
                                </li>

                                <li>
                                    <a href="component-tooltips.html">Tooltips</a>
                                </li>

                            </ul>

                        </li>



                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="briefcase" width="20"></i>
                                <span>Extra Components</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="component-extra-avatar.html">Avatar</a>
                                </li>

                                <li>
                                    <a href="component-extra-divider.html">Divider</a>
                                </li>

                            </ul>

                        </li>



                        <li class='sidebar-title'>Forms &amp; Tables</li>



                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="file-text" width="20"></i>
                                <span>Form Elements</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="form-element-input.html">Input</a>
                                </li>

                                <li>
                                    <a href="form-element-input-group.html">Input Group</a>
                                </li>

                                <li>
                                    <a href="form-element-select.html">Select</a>
                                </li>

                                <li>
                                    <a href="form-element-radio.html">Radio</a>
                                </li>

                                <li>
                                    <a href="form-element-checkbox.html">Checkbox</a>
                                </li>

                                <li>
                                    <a href="form-element-textarea.html">Textarea</a>
                                </li>

                            </ul>

                        </li>



                        <li class="sidebar-item  ">

                            <a href="form-layout.html" class='sidebar-link'>
                                <i data-feather="layout" width="20"></i>
                                <span>Form Layout</span>
                            </a>


                        </li>



                        <li class="sidebar-item  ">

                            <a href="form-editor.html" class='sidebar-link'>
                                <i data-feather="layers" width="20"></i>
                                <span>Form Editor</span>
                            </a>


                        </li>



                        <li class="sidebar-item  ">

                            <a href="table.html" class='sidebar-link'>
                                <i data-feather="grid" width="20"></i>
                                <span>Table</span>
                            </a>


                        </li>



                        <li class="sidebar-item  ">

                            <a href="table-datatable.html" class='sidebar-link'>
                                <i data-feather="file-plus" width="20"></i>
                                <span>Datatable</span>
                            </a>


                        </li>



                        <li class='sidebar-title'>Extra UI</li>



                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Widgets</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="ui-chatbox.html">Chatbox</a>
                                </li>

                                <li>
                                    <a href="ui-pricing.html">Pricing</a>
                                </li>

                                <li>
                                    <a href="ui-todolist.html">To-do List</a>
                                </li>

                            </ul>

                        </li>



                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="trending-up" width="20"></i>
                                <span>Charts</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="ui-chart-chartjs.html">ChartJS</a>
                                </li>

                                <li>
                                    <a href="ui-chart-apexchart.html">Apexchart</a>
                                </li>

                            </ul>

                        </li>



                        <li class='sidebar-title'>Pages</li>



                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Authentication</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="auth-login.html">Login</a>
                                </li>

                                <li>
                                    <a href="auth-register.html">Register</a>
                                </li>

                                <li>
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>

                            </ul>

                        </li>



                        <li class="sidebar-item  has-sub">

                            <a href="#" class='sidebar-link'>
                                <i data-feather="alert-circle" width="20"></i>
                                <span>Errors</span>
                            </a>


                            <ul class="submenu ">

                                <li>
                                    <a href="error-403.html">403</a>
                                </li>

                                <li>
                                    <a href="error-404.html">404</a>
                                </li>

                                <li>
                                    <a href="error-500.html">500</a>
                                </li>

                            </ul>

                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Hi, Saugi</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

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

                <!-- Input Style start -->
                <section id="input-style">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Styles</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>To set rounded border to input box, use <code>.round</code> class and
                                                to set square border to input box, use <code>.sqaure</code> class
                                                alongwith
                                                <code>.form-control</code> class.
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="roundText">Rounded Input</label>
                                                <input type="text" id="roundText" class="form-control round"
                                                    placeholder="Rounded Input">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="squareText">Square Input</label>
                                                <input type="text" id="squareText" class="form-control square"
                                                    placeholder="Square Input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Style end -->

                <!-- Horizontal Input start -->
                <section id="horizontal-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Horizontal Input</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>To make label in center of form-control, use <code>.col-form-label</code>
                                                class with
                                                <code>&lt;label&gt;</code> element. This is default bootstrap class.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">First Name</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="text" id="first-name" class="form-control" name="fname"
                                                        placeholder="First Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row align-items-center">
                                                <div class="col-lg-2 col-3">
                                                    <label class="col-form-label">Last Name</label>
                                                </div>
                                                <div class="col-lg-10 col-9">
                                                    <input type="text" id="last-name" class="form-control" name="fname"
                                                        >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Horizontal Input end -->

                <!-- Basic File Browser start -->
                <section id="input-file-browser">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">File Input</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>Default</p>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" id="customFile">
                                                <label class="form-file-label" for="customFile">
                                                    <span class="form-file-text">Choose file...</span>
                                                    <span class="form-file-button">Browse</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p>With Icon And Button Color</p>
                                            <div class="form-file">
                                                <input type="file" class="form-file-input" id="customFile">
                                                <label class="form-file-label" for="customFile">
                                                    <span class="form-file-text">Choose file...</span>
                                                    <span class="form-file-button btn-primary "><i
                                                            data-feather="upload"></i></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic File Browser end -->

                <!-- Input with Icons start -->
                <section id="input-with-icons">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input with Icons</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>For Input Box with icon use <code>.position-relative</code> class with
                                                <code>.form-group</code> and use class <code>.has-icon-left</code> or
                                                <code>.has-icon-right</code> class for icon on
                                                left side.
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>Left Icon</h6>
                                            <div class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control"
                                                    placeholder="Input with icon left">
                                                <div class="form-control-icon">
                                                    <i data-feather="user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h6>Right Icon</h6>
                                            <div class="form-group position-relative has-icon-right">
                                                <input type="text" class="form-control"
                                                    placeholder="Icon Right, Default Input">
                                                <div class="form-control-icon">
                                                    <i data-feather="file"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input with Icons end -->

                <!-- Input Sizing start -->
                <section id="input-sizing">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Control Sizing Option</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>For different sizes of Input, Use classes like
                                                <code>.form-control-lg</code> &amp;
                                                <code>.form-control-sm</code> for Large, Small input box.
                                            </p>
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>Large</h6>
                                            <input class="form-control form-control-lg" type="text"
                                                placeholder="Large Input">
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>Default</h6>
                                            <input class="form-control" type="text" placeholder="Default Input">
                                        </div>
                                        <div class="col-sm-4">
                                            <h6>Small</h6>
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Small Input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Sizing end -->

                <!-- validations start -->
                <section id="input-validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Input Validation States</h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>You can indicate invalid and valid form fields with
                                                <code>.is-invalid</code> and
                                                <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also
                                                supported
                                                with these classes.
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="valid-state">Valid State</label>
                                            <input type="text" class="form-control is-valid" id="valid-state"
                                                placeholder="Valid" value="Valid" required>
                                            <div class="valid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                This is valid state.
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="invalid-state">Invalid State</label>
                                            <input type="text" class="form-control is-invalid" id="invalid-state"
                                                placeholder="Invalid" value="Invalid" required>
                                            <div class="invalid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                This is invalid state.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- validations end -->


            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Voler</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-editor.js"></script>


</body>

</html>