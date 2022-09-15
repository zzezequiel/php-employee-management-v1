<?php 
include('loginController.php');
function validate(){

    $user = $_POST['email'];
    $password = $_POST['password'];

    echo $user;

}