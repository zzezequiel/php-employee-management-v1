<?php

require_once('loginManager.php');


if(!empty($_POST['email']) && !empty($_POST['password'])){
    
    validate();
}
else{
    header("location:../../index.php")
}

#logout
