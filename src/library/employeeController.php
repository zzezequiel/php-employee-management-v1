<?php 

/*
This file will handle the HTTP requests that will be made to create, read, update and delete the employees and for this it must include the  “employeeManager.php” file and call the corresponding functions of it that will be in charge of performing the operations.
*/
include('employeeManager.php');

#New Employees
$newName=$_POST['newName'];
$newLastName=$_POST['newLastName'];
$newEmail=$_POST['newEmail'];
$newPhone=$_POST['newPhone'];
#upploadad the rest latter
#$gender=$_POST['gender'];
#$city=$_POST['city'];
#$street=$_POST['street'];
#$state=$_POST['state'];
#$age=$_POST['age'];
#$postal=$_POST['postal'];
echo json_encode($newName);
    
   
   
   
   
   
   
   
   
   
   
   /*if(!empty($_POST['newName'])&&!empty($_POST['newLastName'])&&!empty($_POST['newEmail'])&&!empty($_POST['newPhone'])){
      $newEmployee = array(
         "name" => $_POST['newName'],
         "LastName" => $_POST['newLastName'],
         "email"=> $_POST['newEmail'],
         "phone" => $_POST['newPhone']
      );
      addEmployee($newEmployee);

    }else {
      echo "didnt work";
    }*/