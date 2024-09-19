<?php

include('components/header.php');

require_once('./Controller/class/product.class.php');


$product = new Product();
$items = $product->retrieve();






?>

<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Manage Products</h3>
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
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">

            <div class="card-body">
                <table class='table' id="table1">
                    <thead>
                        <tr>
                            <!-- <th >Id</th> -->
                            <th>Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Sizes</th>
                            <th>Featured Image</th>
                            <th>Edit/Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   foreach($items as $item ) { ?>
                        <tr>
                            <!-- <td><?php echo $item['pid']; ?></td> -->
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            <td><?php echo $item['category']; ?></td>

                            <td><?php echo $item['sub_category']; ?></td>
                            <td>
                                <?php

$sizes =[$item['s_30'],$item['s_31'],$item['s_32'],$item['s_33'],$item['s_34'],$item['s_35'],$item['s_36'],$item['s_37'],$item['s_38'],$item['s_39'],$item['s_40'],$item['s_41'],$item['s_42'],$item['s_43'],$item['s_44'],$item['s_45']];

echo "30 ->".$sizes[0].", 31->".$sizes[1].", 32->".$sizes[2].", 33->".$sizes[4].", 34->".$sizes[5].", 35->".$sizes[6].", 36->".$sizes[7].", 37->".$sizes[8].", 38->".$sizes[9].", 39->".$sizes[10].", 40->".$sizes[11].", 41->".$sizes[12].", 42->".$sizes[12].", 43->".$sizes[13].", 44->".$sizes[14].", 45->".$sizes[15];



?>
                            </td>


                            <td><img src="./images/<?php echo $item['featured_img']; ?>" alt="" srcset="" height="70rem"
                                    width="70rem"></td>
                            <td>
                                <div class="container">

                                    <a class="text-dark my-1 mx-1"
                                        href="edit-product.php?id=<?php echo $item['pid'];?> "><i
                                            class='fas fa-pencil-alt' style='font-size:1.5rem'></i></a>

                                    <a class="text-dark my-1 mx-1 delete-button" data-id="<?php echo $item['pid']; ?>"
                                        href="#">
                                        <i class='fas fa-trash-alt' style='font-size:1.5rem;color:red'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const productId = this.getAttribute('data-id');

            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success swal-confirm-btn',
                    cancelButton: 'btn btn-danger swal-cancel-btn'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, proceed with deletion
                    window.location.href = `delete-product.php?id=${productId}`;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your Product is safe :)',
                        'error'
                    );
                }
            });
        });
    });
});
</script>
<?php

       include ('components/footer.php');
       ?>