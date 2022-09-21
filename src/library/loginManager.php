<?php 
<<<<<<< HEAD
#include('loginController.php');
=======

#require_once('loginController.php');


>>>>>>> Z
function validate(){

    $data = file_get_contents('../../resources/users.json');

    $emailInput = $_POST['email'];
    $passwordInput = $_POST['password'];
  
    $dataDecode = json_decode($data, true); #transform users obj to array
  
    $emailServer = ($dataDecode["users"][0]["email"]);
    $passwordServer = ($dataDecode["users"][0]["password"]);

        
    if($emailInput === $emailServer && password_verify($passwordInput, $passwordServer)){  #password_verify = decrypt $passwordServer
        header('location:../dashboard.php');
    }
   else{
        header('location:../../index.php?status=error');
        echo "error";
        
    }
   
}

