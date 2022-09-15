<?php 

require_once('loginController.php');
function validate(){

    #$user = $_POST['email'];
    #$password = $_POST['password'];

    $user = json_decode('user.json');
    echo $user["name"];
}