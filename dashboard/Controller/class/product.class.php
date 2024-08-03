<?php

require_once('product.class.php');
require_once('common.class.php');


class Product extends common{

    public $name,$price,$desc,$category,$sub_category,$featured_img,$add_img1,$add_img2,$add_img3,
    $s_30,$s_31,$s_32,$s_33,$s_34,$s_35,$s_36,$s_37,$s_38,$s_39,$s_40,$s_41,$s_42,$s_43,$s_44,$s_45;

    
    
  
    public function Save(){
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');

    $sql ="insert into product (name,price,description,category,sub_category,featured_img,add_img1,add_img2,add_img3,s_30,s_31,s_32,s_33,s_34,s_35,s_36,s_37,s_38,s_39,s_40,s_41,s_42,s_43,s_44,s_45) values('$this->name','$this->price','$this->desc','$this->category','$this->sub_category','$this->featured_img','$this->add_img1','$this->add_img2','$this->add_img3','$this->s_30','$this->s_31','$this->s_32','$this->s_33','$this->s_34','$this->s_35','$this->s_36','$this->s_37','$this->s_38','$this->s_39','$this->s_40','$this->s_41','$this->s_42','$this->s_43','$this->s_44','$this->s_45')";

    

    

    $res = mysqli_query($conn,$sql);

    if($res){
        
        header('Location:../add-product.php?msg="Product Added Successfully"');
        exit();
    }else{
        header('Location:../add-product.php?ErrMsg="Failed to add Product"');
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
}




?>