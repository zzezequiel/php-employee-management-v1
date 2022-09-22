<?php

include('employeeManager.php');


if(isset($_GET["action"])&&$_GET["action"]=="listEmployees"){
   echo loadAllEmployees(); //function from manager file
}




if(isset($_GET["action"])&& $_GET["action"]=="delete"){
   
   $id=$_GET["id"];
   //echo $id;
  echo deleteEmployee($id); //function from manager file
}


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
    
