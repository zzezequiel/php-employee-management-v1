<?php
/*
*This file will handle the HTTP requests that will be made to create, read, update and delete 
* the employees and for this it must include the  “employeeManager.php” file and call the 
corresponding functions of it that will be in charge of performing the operations.
/


//ver como acceder al fitchero JSON  y devolver un array por post 
//carrga el ficher json 

//recibe peticion del fetch del fichero JS del dashbord
/*
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
    echo $name;
    echo $lastName;
    */
?>
<?php 

/*
This file will handle the HTTP requests that will be made to create, read, update and delete the employees and for this it must include the  “employeeManager.php” file and call the corresponding functions of it that will be in charge of performing the operations.
*/
include('employeeManager.php');


$print = "hola funciono";
var_dump($print);
 getEmployee(3);

 if(isset($_GET['name']){
    if($_GET['name']=='loadUsers'){
        for
       

    }

 }





//recibe el fetch del JS y llama la funcion
#if(isset($_POST['add'])){
    
#$add = $_POST['add'];
    
    
   # addEmployee();
#}
