<?php

require_once ('order.class.php');
require_once('common.class.php');


class Order extends common{
// class Order {

    public  $oid,$cid,$pid,$status,$customer_name,$product,$quantity,$price,$total,$delivery_address,$phone,$email,$order_date;

public function save(){

}
    public function retrieve(){

        $conn =mysqli_connect('localhost','root','','nepalifootprints');
        $sql = "select * from orders ";


        $res = mysqli_query($conn,$sql);

        if($res){
            $datalist =$res->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        }else{
            return false;
        }




    }


    public function retrieveOne(){

        $conn =mysqli_connect('localhost','root','','nepalifootprints');
        $sql = "select * from orders where email ='sachinseengh@gmail.com' ";


        $res = mysqli_query($conn,$sql);

        if($res){
            $datalist =$res->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        }else{
            return false;
        }
    }
    public function retrieveOneOrder(){

        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
        
        // Use $this->oid to reference the class property
        $sql = "SELECT * FROM orders WHERE oid = $this->oid";
    
        $res = mysqli_query($conn, $sql);
    
        if ($res) {
            // Use fetch_assoc() to fetch a single row as an associative array
            $datalist = $res->fetch_assoc();
            return $datalist;
        } else {
            return false;
        }
    }


    public function edit(){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
    
        $sql ="update orders set status= '$this->status' where oid='$this->oid'";

        
        $res = mysqli_query($conn,$sql);

        if($res){
            header('Location: /NepaliFootprints/dashboard/manage-orders.php?Msg=' . urlencode("Order Status Updated"));
            exit();
        }else{
            header('Location: /NepaliFootprints/dashboard/manage-orders.php?ErrMsg=' . urlencode("Failed to Update Status"));
        }
    
    }

    
    
}



?>