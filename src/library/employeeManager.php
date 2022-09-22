<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */


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


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id)
{
    $allEmployees = file_get_contents("../../resources/employees.json");
    //return $allEmployees[$id]                    //revisar id

}


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
// code to get the id at add employee
 /* $totalEmployess=count($employeesCollection);
  echo $totalEmployess; */
  

}

