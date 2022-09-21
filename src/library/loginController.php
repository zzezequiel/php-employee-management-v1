<?php

require_once('loginManager.php');


if(!empty($_POST['email']) && !empty($_POST['password'])){
    
    validate();
}
else{
    #header("location:../../index.php"); brings out problems with local host
}

if(isset($_POST['action'] )&& $_POST['action']=="logout"){
logOut();
}
#logout
