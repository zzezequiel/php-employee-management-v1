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
include('employeeManager.php');


    $name=$_POST['name'];
    $lastName=$_POST['lastName'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $street=$_POST['street'];
    $state=$_POST['state'];
    $age=$_POST['age'];
    $postal=$_POST['postal'];
    $phone=$_POST['phone'];
    
