<?php

require_once('./class/Product.class.php');

$product = new Product();


    $product->set('name',$_POST['name']);
    $product->set('price',$_POST['price']);
    $product->set('desc',$_POST['desc']);
    $product->set('category',$_POST['category']);
    $product->set('sub_category',$_POST['sub_category']);
    $product->set('featured_image',$_POST['featured_image']);
    $product->set('add_img1',$_POST['add_img1']);
    $product->set('add_img2',$_POST['add_img2']);
    $product->set('add_img3',$_POST['add_img3']);
    $product->set('s_30',$_POST['s_30']);
    $product->set('s_31',$_POST['s_31']);
    $product->set('s_32',$_POST['s_32']);
    $product->set('s_33',$_POST['s_33']);
    $product->set('s_34',$_POST['s_34']);
    $product->set('s_35',$_POST['s_35']);
    $product->set('s_36',$_POST['s_36']);
    $product->set('s_37',$_POST['s_37']);
    $product->set('s_38',$_POST['s_38']);
    $product->set('s_39',$_POST['s_39']);
    $product->set('s_40',$_POST['s_40']);
    $product->set('s_41',$_POST['s_41']);
    $product->set('s_42',$_POST['s_42']);
    $product->set('s_43',$_POST['s_44']);
    $product->set('s_44',$_POST['s_44']);
    $product->set('s_45',$_POST['s_45']);
    

    $product->Save();

    
    





?>