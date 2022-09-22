<?php

include('employeeManager.php');

//GET EMPLOYEES
if(isset($_GET["action"])&&$_GET["action"]=="listEmployees"){
   echo loadAllEmployees(); //
}



//DELETE EMPLOYEES
if(isset($_GET["action"])&& $_GET["action"]=="delete"){
   
   $id=$_GET["id"];
  echo deleteEmployee($id); //function from manager file
}


//NEW EMPLOYEE
if(!empty($_POST['newName'])&&!empty($_POST['newLastName'])&&!empty($_POST['newEmail'])&&!empty($_POST['newPhone'])){

      
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
   
//OPEN EMPLOYEE INFO
if(isset($_GET["action"])&& $_GET["action"]=="openEmployee"){
    
   $id=$_GET["id"];
  echo getEmployee($id);
   
  
}
























