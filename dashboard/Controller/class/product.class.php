<?php

require_once('product.class.php');
require_once('common.class.php');


class Product extends common{

    public $pid, $name,$price,$desc,$category,$sub_category,$featured_img,$add_img1,$add_img2,$add_img3,
    $s_30,$s_31,$s_32,$s_33,$s_34,$s_35,$s_36,$s_37,$s_38,$s_39,$s_40,$s_41,$s_42,$s_43,$s_44,$s_45,$quantity,$size;


    public function Save(){
    $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');

    $sql ="insert into product (name,price,description,category,sub_category,featured_img,add_img1,add_img2,add_img3,s_30,s_31,s_32,s_33,s_34,s_35,s_36,s_37,s_38,s_39,s_40,s_41,s_42,s_43,s_44,s_45) values('$this->name','$this->price','$this->desc','$this->category','$this->sub_category','$this->featured_img','$this->add_img1','$this->add_img2','$this->add_img3','$this->s_30','$this->s_31','$this->s_32','$this->s_33','$this->s_34','$this->s_35','$this->s_36','$this->s_37','$this->s_38','$this->s_39','$this->s_40','$this->s_41','$this->s_42','$this->s_43','$this->s_44','$this->s_45')";

    $res = mysqli_query($conn,$sql);
    if($res){
        header('Location:../manage-product.php?msg="Product Added Successfully"');
        exit();
    }else{
        header('Location:../manage-product.php?ErrMsg="Failed to add Product"');
        exit();
    }

    }

    public function retrieve()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
     
        $sql = "select * from product order by pid desc ";
        $var = mysqli_query($conn,$sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }

    
    public function Edit(){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
    
        $sql ="update product set name ='$this->name',price ='$this->price',description='$this->desc',category='$this->category',sub_category='$this->sub_category',featured_img='$this->featured_img',add_img1='$this->add_img1',add_img2='$this->add_img2',add_img3='$this->add_img3',s_30='$this->s_30',s_31='$this->s_31',s_32='$this->s_32',s_33='$this->s_33',s_34='$this->s_34',s_35='$this->s_35',s_36='$this->s_36',s_37='$this->s_37',s_38='$this->s_38',s_39='$this->s_39',s_40='$this->s_40',s_41='$this->s_41',s_42='$this->s_42',s_43='$this->s_43',s_44='$this->s_44',s_45='$this->s_45' where pid='$this->pid'";

        
          
        $res = mysqli_query($conn,$sql);
        if($res){
            header('Location:../manage-product.php?msg="Product Edited Successfully"');
            exit();
        }else{
            header('Location:../manage-product.php?ErrMsg="Failed to edit Product"');
            exit();
        }
    
        }

    public function getById(){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
     
        $sql = "select * from product where pid='$this->pid' ";
        $var = mysqli_query($conn,$sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_object();
            return $datalist;
        } else {
            return false;
        }
    }

    public function getProducts(){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
     
        $sql = "select * from product order by pid desc limit 12";
    
        $var = mysqli_query($conn,$sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }
    public function getProductsMen(){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
     
        $sql = "select * from product where category='men' order by pid desc limit 3";
    
        $var = mysqli_query($conn,$sql);
        if ($var) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }

    public function getByCategory(){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
     
        $sql = "select * from product where category='$this->category' and sub_category='$this->sub_category'";
        
        $var = mysqli_query($conn,$sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }

    


    public function Delete(){

        $conn = mysqli_connect('localhost','root','','nepalifootprints');
        $sql = "delete from product where pid = '$this->pid'";



        $res=mysqli_query($conn,$sql);
    
        if($res){
            header('Location:./manage-product.php?msg=Product Deleted Successfully');
            exit();
        }else{
            header('Location:./manage-product.php?ErrMsg="Product Deletion Failed');
            exit();
        }
    }


  
}




?>