<?php
require_once "Employee.php";

$n = trim(intval(fgets(STDIN)));

$departments = [];
while ($n--){
    $input = explode(' ', trim(fgets(STDIN)));

    $employee = createEmployee($input);
    $currDep = $employee->getDepartment();
    if(!key_exists($currDep,$departments)){
        $departments[$currDep] = [];
    }
    array_push($departments[$currDep],$employee);
    $departments[$currDep];
}

$depName = '';
$highestSalary = 0;
foreach ($departments as $key=> $value) {
    $currSalary = 0;
    foreach ($value as $employee) {
        $currSalary += $employee->getSalary();
    }
    $currSalary /= count($value);
    if ($currSalary > $highestSalary) {
        $highestSalary = $currSalary;
        $depName = $key;
    }
}

$departments = $departments[$depName];

usort($departments,function ($emp1,$emp2){

    return $emp2->getSalary() - $emp1->getSalary();
});
echo 'Highest Average Salary: '. $depName . PHP_EOL;
foreach ($departments as $key=>$value){
    echo $value . PHP_EOL;
}

function createEmployee($input): Employee
{
    $len = count($input);
    $name = $input[0];
    $salary = floatval($input[1]);
    $position = $input[2];
    $department = $input[3];
    $email = null;
    $age = null;

    if ($len == 5) {
        if (ctype_digit($input[4])) {
            $age = intval($input[4]);
        } else {
            $email = $input[4];
        }
    } else if ($len == 6) {
        $email = $input[4];
        $age = intval($input[5]);
    }
    return new Employee($name, $salary, $position, $department, $email, $age);
}
