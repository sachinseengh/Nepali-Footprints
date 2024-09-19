<?php

require_once('../class/user.class.php');
$user= new User();


$user->set('email','sachinseengh@gmail.com');
    $user->set('password',$_POST['password']);
    $user->set('name',$_POST['name']);
    $user->set('phone',$_POST['phone']);
    $user->set('city',$_POST['city']);
    $user->set('address',$_POST['address']);


    $user->edit(); 






?>