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
            header('Location: /NepaliFootprints/users/register.php?ErrMsg=' . urlencode("Registration Failed"));
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
    public function retrieveAll()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'nepalifootprints');
     
        $sql = "select * from customer ";
        $var = mysqli_query($conn,$sql);
        if ($var->num_rows > 0) {
            $datalist = $var->fetch_all(MYSQLI_ASSOC);
            return $datalist;
        } else {
            return false;
        }
    }

    public function login(){
        $conn  = new mysqli("localhost","root","","nepalifootprints");

        $sql ="select * from customer where email = '$this->email' and password ='$this->password'";
        $res = mysqli_query($conn,$sql);

         if(mysqli_num_rows($res)>0){
                

                session_start();
                $data = $this->retrieve();
                $this->cid = $data['cid'];

                $_SESSION['email']= $this->email;
                $_SESSION['cid']=$this->cid;
                // Set a cookie that lasts for 1 days
                setcookie("email",$this->email, time() + ( 24 * 60 * 60), "/"); // expires in 1 day
                setcookie("cid",$this->cid, time() + ( 24 * 60 *  60), "/"); // expires in 1 day


               

            header('Location: /NepaliFootprints/users/profile.php');
            exit();
        }else{
            header('Location: /NepaliFootprints/users/login.php?ErrMsg=' . urlencode("Incorrect Credentials"));
            exit();
        }
    }

    public function edit(){
        $conn  = new mysqli("localhost","root","","nepalifootprints");

        
        $sql ="update customer set password ='$this->password',phone='$this->phone',address ='$this->address',city='$this->city' where email='$this->email'";

    
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
    public function deleteCustomer(){
        $conn  = new mysqli("localhost","root","","nepalifootprints");

        
        $sql ="delete from customer where email='$this->email'";
    
        $res = mysqli_query($conn,$sql);


        if($res){
            header('Location: /NepaliFootprints/dashboard/manage-customer.php?Msg=' . urlencode("Account deleted"));
            exit();
        }else{
            header('Location: /NepaliFootprints/dashboard/manage-customer.php?Msg=' . urlencode("Failed to delete account"));
            exit();
        }

    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();

        session_abort();

       
        setcookie('email', '', time() - 3600, '/');
        setcookie('cid', '', time() - 3600, '/');

        
        header('Location: /NepaliFootprints/users/login.php?Msg=' . urlencode("Logout Successfully"));
        exit();
    }

}








?>