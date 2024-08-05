<?php
require_once ('./class/cart.class.php');

$id= $_GET['id'];
$quantity = $_GET['quantity'];
$size = $_GET['Size'];



$cart = new Cart();
$cart->set('pid',$id);
$cart->set('quantity',$quantity);

$cart->set('size',$size);
$cart->set('price',$_GET['price']);



$cart->save();



?>