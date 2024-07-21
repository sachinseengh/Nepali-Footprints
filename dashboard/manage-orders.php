<?php

include ('components/header.php');


?>
            <div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Orders</h3>
                <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p>
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
            <div class="card-header">
                Simple Datatable
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>OrderBy</th>
                            <th>Phone</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Total Amount</th>
                        <th>Delivery Address</th>
                        <th>Status</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.aliquetdddddddddddddddddddddsemconsequat.co.uk</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>kfhdk </td>
                            <td>kdjf</td>
                            <td>Gaushal -11,mahottari</td>
                            <td>
                            <span class="badge bg-primary">Shipped</span></td>
                            <td>

                            <div class="container">
                                            <a class="text-dark my-1 mx-1 "><i class='fas fa-pencil-alt' style='font-size:1.5rem'></i></a>
                                            
                                            </div>
                            </td>
                        </tr>
                      
                       
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

      <?php


include ('components/footer.php');
?>