<?php 
include('employeeManager.php');

   #Employees
   
    


    if(!empty($_POST['newName'])&&!empty($_POST['newLastName'])&&!empty($_POST['newEmail'])&&!empty($_POST['newPhone'])){
      $newEmployee = array(
         "name" => $_POST['newName'],
         "LastName" => $_POST['newLastName'],
         "email"=> $_POST['newEmail'],
         "phone" => $_POST['newPhone']
      );
      addEmployee($newEmployee);

    }else {
      echo "didnt work";
    }