<?php

session_start();

function loadAllEmployees (){
    $allEmployees = file_get_contents("../../resources/employees.json");
    return $allEmployees;
    
}

function addEmployee($newEmployee)   
{  

    $data = loadAllEmployees();

    $tempArray = json_decode($data, true);

    $newEmployee["id"] = end($tempArray)["id"]+1;
    
    array_push($tempArray, $newEmployee);
    
    $jsonData = json_encode($tempArray);

    file_put_contents('../../resources/employees.json', $jsonData);

    echo $jsonData;
  
}

function deleteEmployee(string $id){  //esta es la que falla/////////////////////////////////////////////
// read json file
$data = loadAllEmployees();

$employees = json_decode($data, true);

// delete dat
for($i=1;$i<count($employees); $i++){
    if(strval($employees[$i]['id'])===$id){
        $employeesPos=array_search($employees[$i],$employees);
        array_splice($employees,$employeesPos,1); 
    }
    file_put_contents('../../resources/employees.json',  json_encode($employees));
}
  echo json_encode($employees);
}


function updateEmployee($updateEmployee)
{
    $data = loadAllEmployees();
    $employees = json_decode($data, true);
   
    for($i=0;$i<count($employees); $i++){
        if(($employees[$i]['id'])==$updateEmployee['id']){
        
            $employees[$i]=$updateEmployee;
        }
    }    
      file_put_contents('../../resources/employees.json',json_encode($employees));
}

function getEmployee(string $id)
{
    $data = loadAllEmployees();

   $employees = json_decode($data, true);
for($i=0;$i<count($employees); $i++){
    if(strval($employees[$i]['id'])===$id){
        $employeeSelected=$employees[$i];  
       // echo json_encode($employeeSelected);  
     $_SESSION["employeeSelected"]=$employeeSelected;
    }
   
}
header("Location:../employee.php");
}

function removeAvatar($id)
{
// TODO implement it
}
function getQueryStringParameters(): array
{
// TODO implement it
}



