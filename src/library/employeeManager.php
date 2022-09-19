<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *This file will perform the necessary operations (create, read, update and delete)
 * which will be called later by the "employeeController.php" file.

 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
    $newEmployee = "worked";
 var_dump($newEmployee);
}


function deleteEmployee(string $id)
{
// TODO implement it
}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id) //return one employee
{
$data = file_get_contents('../../resources/employees.json');
$dataDecode = json_decode($data, true); #transform users obj to array
   $name =$dataDecode[$id];
   var_dump($name);

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
// TODO implement it
}
