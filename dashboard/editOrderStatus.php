<?php

include ('components/header.php');

include ('./Controller/class/order.class.php');

$order = new Order();

$id = $_GET['id'];
$order->set('oid',$id);
$singleOrder=$order->retrieveOneOrder();







?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Orders Status</h3>
                <!-- <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p> -->
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
           
            <div class="card-body p-5">

                <form action="./Controller/editOrderStatus.php" method="post" class="order-form">
                    <label for="order-id">Order Id:</label>
                    <input type="number" name="oid" id="order-id" class="input-field" value=<?php echo $singleOrder['oid']; ?> readOnly>

                    <label for="status">Choose Status:</label>
                    <select id="status" class="select-field" name="status">

                        <option value="Active"<?php if($singleOrder['status']==="Active") echo "selected" ?>>Active</option>
                        <option value="Confirmed"<?php if($singleOrder['status']==="Confirmed") echo "selected" ?>>Confirmed</option>
                        <option value="Shipped"<?php if($singleOrder['status']==="Shipped") echo "selected" ?> >Shipped</option>
                        <option value="Delivered"<?php if($singleOrder['status']==="Delivered") echo "selected" ?>>Delivered</option>
                        <option value="Fake"<?php if($singleOrder['status']==="Fake") echo "selected" ?>>Fake</option>
                    </select>

                    <input type="submit" value="Submit" class="submit-btn">
                </form>


            </div>
        </div>

    </section>
</div>

<?php


include ('components/footer.php');
?>