<?php 

/*
This file will handle the HTTP requests that will be made to create, read, update and delete the employees and for this it must include the  “employeeManager.php” file and call the corresponding functions of it that will be in charge of performing the operations.
*/
include('employeeManager.php');


$print = "hola funciono";
var_dump($print);
 getEmployee(3);


//recibe el fetch del JS y llama la funcion
#if(isset($_POST['add'])){
    
#$add = $_POST['add'];
    
    
   # addEmployee();
#}