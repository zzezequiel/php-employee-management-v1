<?php

include('loginManager.php');


if(!empty($_POST['email']) && !empty($_POST['password'])){
    
    validate();
}


if(isset($_GET['action'] )&& $_GET['action']=="logout"){
logOut();
}
#logout
