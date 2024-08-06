<?php

require_once ('order.class.php');


// class Order extends common{
class Order {

    public $cid,$pid,$customer_name,$product,$quantity,$price,$total,$delivery_address,$phone,$email,$order_date;


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


}



?>