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
         "streetAddress" => '',
         "state"=> '',
         "age" => '',
         "postalCode" => ''
      );

      addEmployee($newEmployee);

}
   
//OPEN EMPLOYEE INFO
if(isset($_GET["action"])&& $_GET["action"]=="openEmployee"){
    
   $id=$_GET["id"];
  echo getEmployee($id);
   
  
}

//GET POST FROM EMPLOYEE PAGE FORM 
if(!empty($_POST['name'])&&!empty($_POST['lastName'])&&!empty($_POST['email'])&&!empty($_POST['phoneNumber'])){

   $updateEmployee = array(
      "id" => $_POST['id'],
      "name" => $_POST['name'],
      "lastName" => $_POST['lastName'],
      "email"=> $_POST['email'],
      "phoneNumber" => $_POST['phoneNumber'],
      "gender" => $_POST['gender'],
      "city" => $_POST['city'],
      "streetAddress" => $_POST['streetAddress'],
      "state" => $_POST['state'],
      "age" => $_POST['age'],
      "postalCode" =>$_POST['postalCode']
   );
//echo json_encode($newEmployee);
echo updateEmployee($updateEmployee);
header("Location:../dashboard.php");

}























