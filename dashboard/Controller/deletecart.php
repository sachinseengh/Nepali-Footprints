<?php


require_once ('./class/cart.class.php');

$cart = new Cart();

$id = $_GET['id'];
$cart->set('pid',$id);


$cart->deleteById();


?>