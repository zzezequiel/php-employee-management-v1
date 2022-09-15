<?php 
require_once('resources/employees.json')
require_once('loginController.php');
function validate(){

    $user = $_POST['email'];
    $password = $_POST['password'];

    echo $user;

}