<?php


require_once('./Controller/class/product.class.php');
$id = $_GET['id'];

$product = new Product();



$product->set('pid',$id);


$product->Delete();




?>