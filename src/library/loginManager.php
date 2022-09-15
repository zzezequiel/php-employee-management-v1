<?php 

require_once('loginController.php');


function validate(){

    echo "json";
    $user = $_POST['email'];
    $password = $_POST['password'];

    $data = file_get_contents('../../resources/users.json');
   

    $user = json_decode($data, true);
   // print_r($user);
   //var_dump($user);
    echo ($user["users"][0]["name"]);
   // print_r($user{"users"}{"userId"});
}
?>
