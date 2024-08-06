<?php

require_once('cart.class.php');
require_once('common.class.php');

class Cart extends common{
    public $featured_img,$pid,$quantity,$name,$price,$cart_id;

    public function save() {
        $conn = mysqli_connect('localhost','root','','nepalifootprints');
        $sql = "insert into cart (pid,quantity,price,size) values('$this->pid','$this->quantity','$this->price','$this->size')";

        echo $sql;

        $res = mysqli_query($conn,$sql);
        if($res){
            header('Location: /NepaliFootprints/cart.php?Msg=' . urlencode("Product Added Successfully"));

            exit();
        }else{
            header("Location: /NepaliFootprints/product_detail.php?id=" . $this->pid . "&ErrMsg=" . urlencode("Failed to add Product"));
            exit();
        }

    }

public function retrieve(){
    $conn = mysqli_connect('localhost','root','','nepalifootprints');

    $sql = "SELECT  cart.cart_id As cartId, cart.quantity AS quantity ,cart.total AS total ,cart.size AS size, product.pid AS pid, product.name AS product_name,  product.price AS product_price,  product.featured_img FROM  cart INNER JOIN  product ON  cart.pid = product.pid ";


    $res = mysqli_query($conn,$sql);


    if($res){
        $datalist = $res->fetch_all(MYSQLI_ASSOC);
        
        return $datalist;
    }else{
        
        return false;
    }
}

public function deleteById(){
    $conn = mysqli_connect('localhost','root','','nepalifootprints');

    $sql = "delete from cart where pid='$this->pid' ";
    $res = mysqli_query($conn,$sql);


    if($res){
            header('Location: /NepaliFootprints/cart.php?Msg=' . urlencode("Product Deleted Successfully"));
            exit();
        }else{
            header("Location: /NepaliFootprints/cart.php?id=" . $this->pid . "&ErrMsg=" . urlencode("Failed to delete Product"));
            exit();
        }
}

public function totalAmount(){
    $conn = mysqli_connect('localhost','root','','nepalifootprints');

    $sql = "select sum(total) as total from cart ";
    $res = mysqli_query($conn,$sql);


    if($res){
        $row = mysqli_fetch_assoc($res);
    
        $total = $row['total'];  

        return $total;
            
        }else{
            return fasle;
        }
}


public function getCart(){
    $conn = mysqli_connect('localhost','root','','nepalifootprints');

    $sql = "SELECT  cart.cart_id AS cartId, cart.quantity AS quantity,cart.size AS size,cart.total As total, product.pid AS pid, product.name AS product_name,  product.price AS product_price,  product.featured_img FROM  cart INNER JOIN  product ON  cart.pid = product.pid ";

    $res = mysqli_query($conn,$sql);


    if($res){
        $row = $res->fetch_all(MYSQLI_ASSOC);

        return $row;
            
        }else{
            return fasle;
        }
}

public function increaseByOne(){
    $conn = mysqli_connect('localhost','root','','nepalifootprints');

    $sql = "Update cart set quantity = quantity + 1 where cart_id = '$this->cart_id'" ;

    $res = mysqli_query($conn,$sql);


    if($res){
        
        header('Location: /NepaliFootprints/cart.php?Msg=' . urlencode("Cart Updated"));
        exit();
            
        }else{
            return fasle;
        }
}

public function decreaseByOne(){
    $conn = mysqli_connect('localhost','root','','nepalifootprints');

    $sql = "Update cart set quantity = quantity - 1 where cart_id = '$this->cart_id'" ;

    $res = mysqli_query($conn,$sql);


    if($res){
        
        header('Location: /NepaliFootprints/cart.php?Msg=' . urlencode("Cart Updated"));
        exit();
            
        }else{
            return fasle;
        }
}







}

?>