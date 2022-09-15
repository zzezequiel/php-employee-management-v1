<?php



if(!empty($_POST['email']) && !empty($_POST['password'])){
    echo "bien";
    #validate();
}
else{
    echo "error";
}