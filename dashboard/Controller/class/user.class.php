<?php
require_once('user.class.php');
require_once('common.class.php');

class User extends common {
    public $cid,$email,$password,$name,$phone,$city,$address;

    public function save(){

        $conn  = new mysqli("localhost","root","","nepalifootprints");
        $sql = "insert into customer(email,password,name,phone,city,address) values('$this->email','$this->password','$this->name','$this->phone','$this->city','$this->address')";


        
        $res = mysqli_query($conn,$sql);

        if($res){
            header('Location: /NepaliFootprints/users/login.php?Msg=' . urlencode("Registered Successfully, Now you can log in"));
            exit();
        }else{
            header('Location: /NepaliFootprints/users/register.php?Msg=' . urlencode("Registration Failed"));
            exit();
        }

    }

    public function retrieve(){

        $conn  = new mysqli("localhost","root","","nepalifootprints");
        $sql =" select * from customer  where email ='$this->email'";
        $res = mysqli_query($conn,$sql);

        if($res->num_rows>0){
        $row = mysqli_fetch_assoc($res);
        return $row;
        }else{
            return false;
        }
    }

    public function login(){
        $conn  = new mysqli("localhost","root","","nepalifootprints");

        $sql ="select * from customer where email = '$this->email' and password ='$this->password'";
        $res = mysqli_query($conn,$sql);

         if(mysqli_num_rows($res)>0){
            header('Location: /NepaliFootprints/users/profile.php');
            exit();
        }else{
            header('Location: /NepaliFootprints/users/login.php?Msg=' . urlencode("Incorrect Credentials"));
            exit();
        }
    }

    public function edit(){
        $conn  = new mysqli("localhost","root","","nepalifootprints");

        
        $sql ="update customer set password ='$this->password',name ='$this->name',address ='$this->address',city='$this->city' where email='$this->email'";

        echo $sql;
        $res = mysqli_query($conn,$sql);

        if($res){
            header('Location: /NepaliFootprints/users/profile.php?Msg=' . urlencode("Details Updated"));
            exit();
        }else{
            header('Location: /NepaliFootprints/users/edit.php?Msg=' . urlencode("Failed to Update"));
            exit();
        }

    }

    public function delete(){
        $conn  = new mysqli("localhost","root","","nepalifootprints");

        
        $sql ="delete from customer where email='$this->email'";
    
        $res = mysqli_query($conn,$sql);


        if($res){
            header('Location: /NepaliFootprints/users/login.php?Msg=' . urlencode("Account deleted"));
            exit();
        }else{
            header('Location: /NepaliFootprints/users/profile.php?Msg=' . urlencode("Failed to delete account"));
            exit();
        }

    }

}








?>