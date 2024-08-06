<?php



require_once './class/cart.class.php';

$cart = new Cart();

$items = $cart->getCart();


$total = $cart->totalAmount();


$name = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['daddress'];
$phone = $_POST['phone'];
$res;

foreach($items as $item){

$conn = mysqli_connect('localhost','root','','nepalifootprints');
$order_date= date('y-m-d H:i:s');

$sql = "insert into orders(customer_name,product,quantity,price,total,delivery_address,phone,email,order_date) values('$name','".$item['product_name']."','".$item['quantity']."','".$item['product_price']."','".$item['total']."','$address','$phone','$email','$order_date')";



$res = mysqli_query($conn,$sql);

}
if($res){
    
    header('Location: /NepaliFootprints/thankyou.php?Msg=' . urlencode("Order placed Successfully"));
    exit();
}





?>