<?php

require_once('loginManager.php');


if(!empty($_POST['email']) && !empty($_POST['password'])){
    
    validate();
}

#logout
else{
    
    echo "error";
}

