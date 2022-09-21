<?php
/*
*This file will handle the HTTP requests that will be made to create, read, update and delete 
* the employees and for this it must include the  “employeeManager.php” file and call the 
corresponding functions of it that will be in charge of performing the operations.


/*
This file will handle the HTTP requests that will be made to create, read, update and delete the employees and for this it must include the  “employeeManager.php” file and call the corresponding functions of it that will be in charge of performing the operations.
*/



include('employeeManager.php');


if(isset($_GET["action"])&&$_GET["action"]=="listEmployees"){
   echo loadAllEmployees(); //function from manager file
}

   
if(!empty($_POST['newName'])&&!empty($_POST['newLastName'])&&!empty($_POST['newEmail'])&&!empty($_POST['newPhone'])){

     /* $employeesCollection = loadAllEmployees();
      $getTotalId = getNextIdentifier($employeesCollection);
      $newId = $getTotalId + 1;*/
   
      
   $newEmployee = array(
         "id" => 0,
         "name" => $_POST['newName'],
         "lastName" => $_POST['newLastName'],
         "email"=> $_POST['newEmail'],
         "phoneNumber" => $_POST['newPhone'],
         "gender" => '',
         "city" => '',
         "street" => '',
         "age" => '',
         "postal" => ''
      );

      addEmployee($newEmployee);


}
    


























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


































    
/*
$print = "hola funciono";
var_dump($print);
 getEmployee(3);

 if(isset($_GET['name']){
    if($_GET['name']=='loadUsers'){
        echo "hello"
       

    }

 }

*/



//recibe el fetch del JS y llama la funcion
#if(isset($_POST['add'])){
    
#$add = $_POST['add'];
    
    
   # addEmployee();
#}
#New Employees
#$newName=$_POST['newName'];
#$newLastName=$_POST['newLastName'];
#$newEmail=$_POST['newEmail'];
#$newPhone=$_POST['newPhone'];
#upploadad the rest latter
#$gender=$_POST['gender'];
#$city=$_POST['city'];
#$street=$_POST['street'];
#$state=$_POST['state'];
#$age=$_POST['age'];
#$postal=$_POST['postal'];
//echo $newName;