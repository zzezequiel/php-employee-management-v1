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
 //   include("../../assets/js/index.js");


   echo $jsonData;
  

    
  
}


function deleteEmployee(string $id)
{
// TODO implement it
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
  echo $totalEmployess;*/
  

}
