<?php


session_abort();
session_start();
require_once './class/cart.class.php';

$cart = new Cart();

$items = $cart->getCart();


$total = $cart->totalAmount();
$cid = $_SESSION['cid'];

$name = $_GET['fullname'];
$email = $_GET['email'];
$address = $_GET['address'];
$phone = $_GET['phone'];

$res;

foreach($items as $item){

$conn = mysqli_connect('localhost','root','','nepalifootprints');
$order_date= date('y-m-d H:i:s');

$sql = "insert into orders(cid,customer_name,product,quantity,size,price,total,delivery_address,phone,email,order_date) values('$cid','$name','".$item['product_name']."','".$item['quantity']."','".$item['size']."','".$item['product_price']."','".$item['total']."','$address','$phone','$email','$order_date')";


$res = mysqli_query($conn,$sql);

}
if($res){
    
    header('Location: /NepaliFootprints/thankyou.php?msg=' . urlencode("Order placed Successfully"));


    exit();
}else{
    header('Location: /NepaliFootprints/checkout.php?ErrMsg=' . urlencode("Something Went Wrong"));
    exit();

}





?>