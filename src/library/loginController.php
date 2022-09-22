<?php

include('loginManager.php');


if(!empty($_POST['email']) && !empty($_POST['password'])){
    
    validate();
}
else{
    #header("location:../../index.php"); brings out problems with local host
}

if(isset($_GET['action'] )&& $_GET['action']=="logout"){
logOut();
}
#logout
