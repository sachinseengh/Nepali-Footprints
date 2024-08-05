<?php

require_once ('./class/cart.class.php');


$id = $_GET['id'];

$cart = new Cart();

$cart->set('cart_id',$id);


$cart->increaseByOne();






?>