<?php


require_once('../class/user.class.php');
$user= new User();


$user->set('email','sachinseengh@gmail.com');

$user->delete();



?>