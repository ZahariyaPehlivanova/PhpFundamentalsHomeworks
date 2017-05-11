<?php

namespace Mankind;

require_once "Human.php";
require_once "Student.php";
require_once "Worker.php";

try{
    list($studentFirstName,$studentLastName,$facultyNumber) = explode(' ',trim(fgets(STDIN)));
    $student = new Student($studentFirstName,$studentLastName,$facultyNumber);
    list($workerFirstName,$workerLastName,$salary,$workingHours) = explode(' ',trim(fgets(STDIN)));
    $worker = new Worker($workerFirstName,$workerLastName,$salary,$workingHours);
    echo $student . PHP_EOL;
    echo PHP_EOL;
    echo $worker;

}catch (\Exception $ex){
    echo $ex->getMessage();
}


