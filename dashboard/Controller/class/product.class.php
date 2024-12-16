<?php

require_once('product.class.php');
require_once('common.class.php');

class Product extends common {

    public $pid, $name, $price, $desc, $category, $sub_category, $featured_img, $add_img1, $add_img2, $add_img3,
           $s_30, $s_31, $s_32, $s_33, $s_34, $s_35, $s_36, $s_37, $s_38, $s_39, $s_40, $s_41, $s_42, $s_43, $s_44, $s_45, $quantity, $size;

    private function getDbConnection() {
        return mysqli_connect('localhost', 'root', '', 'nepalifootprints');
    }

    public function Save() {
        $conn = $this->getDbConnection();

        $sql = "INSERT INTO product (name, price, description, category, sub_category, featured_img, add_img1, add_img2, add_img3, s_30, s_31, s_32, s_33, s_34, s_35, s_36, s_37, s_38, s_39, s_40, s_41, s_42, s_43, s_44, s_45) 
                VALUES ('$this->name', '$this->price', '$this->desc', '$this->category', '$this->sub_category', '$this->featured_img', '$this->add_img1', '$this->add_img2', '$this->add_img3', '$this->s_30', '$this->s_31', '$this->s_32', '$this->s_33', '$this->s_34', '$this->s_35', '$this->s_36', '$this->s_37', '$this->s_38', '$this->s_39', '$this->s_40', '$this->s_41', '$this->s_42', '$this->s_43', '$this->s_44', '$this->s_45')";

        $res = mysqli_query($conn, $sql);
        if ($res) {
            header('Location:../manage-product.php?msg="Product Added Successfully"');
            exit();
        } else {
            header('Location:../manage-product.php?ErrMsg="Failed to add Product"');
            exit();
        }
    }

    public function retrieve() {
        $conn = $this->getDbConnection();
        $sql = "SELECT * FROM product ORDER BY pid DESC";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function Edit() {
        $conn = $this->getDbConnection();

        $sql = "UPDATE product SET name = '$this->name', price = '$this->price', description = '$this->desc', category = '$this->category', sub_category = '$this->sub_category', featured_img = '$this->featured_img', add_img1 = '$this->add_img1', add_img2 = '$this->add_img2', add_img3 = '$this->add_img3', s_30 = '$this->s_30', s_31 = '$this->s_31', s_32 = '$this->s_32', s_33 = '$this->s_33', s_34 = '$this->s_34', s_35 = '$this->s_35', s_36 = '$this->s_36', s_37 = '$this->s_37', s_38 = '$this->s_38', s_39 = '$this->s_39', s_40 = '$this->s_40', s_41 = '$this->s_41', s_42 = '$this->s_42', s_43 = '$this->s_43', s_44 = '$this->s_44', s_45 = '$this->s_45' WHERE pid = '$this->pid'";

        $res = mysqli_query($conn, $sql);
        if ($res) {

//to update the existing price in cart also
                $sql2= "update cart set price='$this->price' where pid='$this->pid'";
            
                $res2= mysqli_query($conn,$sql2);

            header('Location:../manage-product.php?msg="Product Edited Successfully"');
            exit();
        } else {
            header('Location:../manage-product.php?ErrMsg="Failed to edit Product"');
            exit();
        }
    }

    public function getById() {
        $conn = $this->getDbConnection();
        $sql = "SELECT * FROM product WHERE pid = '$this->pid'";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_object();
        } else {
            return false;
        }
    }

    public function getProducts() {
        $conn = $this->getDbConnection();
        $sql = "SELECT * FROM product ORDER BY pid DESC LIMIT 12";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function getProductsMen() {
        $conn = $this->getDbConnection();
        $sql = "SELECT * FROM product WHERE category = 'men' ORDER BY pid DESC LIMIT 3";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function getByCategory() {
        $conn = $this->getDbConnection();
        $sql = "SELECT * FROM product WHERE category = '$this->category' AND sub_category = '$this->sub_category'";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }
    }

    public function TotalProduct() {
        $conn = $this->getDbConnection();
        $sql = "SELECT count(*) AS totalproduct FROM product";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all();
        } else {
            return false;
        }
    }

    public function TotalProductQuantity() {
        $conn = $this->getDbConnection();
        $sql = "SELECT SUM(s_30) + SUM(s_31) + SUM(s_32) + SUM(s_33) + SUM(s_34) + SUM(s_35) + 
                SUM(s_36) + SUM(s_37) + SUM(s_38) + SUM(s_39) + SUM(s_40) + SUM(s_41) + 
                SUM(s_42) + SUM(s_43) + SUM(s_44) + SUM(s_45) AS total_product_quantity
                FROM product";
        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all();
        } else {
            return false;
        }
    }

    public function Delete() {
        $conn = $this->getDbConnection();


        $cartsql="DELETE FROM cart WHERE pid='$this->pid'";

        
        $sql = "DELETE FROM product WHERE pid = '$this->pid'";

        $cartres=mysqli_query($conn,$cartsql);

        $res = mysqli_query($conn, $sql);
        if ($res) {
            header('Location:./manage-product.php?msg=Product Deleted Successfully');
            exit();
        } else {
            header('Location:./manage-product.php?ErrMsg="Product Deletion Failed');
            exit();
        }
    
        
    }

    public function getSortedProducts($sort) {
      
      
        $conn = $this->getDbConnection();
     
        if ($sort == 'low_to_high') {
            $sql = "SELECT * FROM product ORDER BY price ASC";

        } elseif ($sort == 'high_to_low') {
            $sql = "SELECT * FROM product  ORDER BY price DESC";
        } else {
            return [];  // Return an empty array if no valid sort type is provided
        }

        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }

        
    }
    public function getSortedProductsCategory($sort,$cat,$sub) {
      
        $conn = $this->getDbConnection();
     
        if ($sort == 'low_to_high') {
            $sql = "SELECT * FROM product WHERE category ='$cat' AND sub_category='$sub' ORDER BY price ASC";

        } elseif ($sort == 'high_to_low') {
            $sql = "SELECT * FROM product WHERE category ='$cat' AND sub_category='$sub' ORDER BY price DESC";
        } else {
            return [];  // Return an empty array if no valid sort type is provided
        }


        $var = mysqli_query($conn, $sql);
        if ($var->num_rows > 0) {
            return $var->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }

        
    }
}

?>
