<?php

namespace Person;

require_once "Person.php";
require_once "Child.php";

try {
    $name = trim(fgets(STDIN));
    $age = intval(fgets(STDIN));
    $child = new Child($name, $age);

    echo $child;
}catch (\Exception $ex){
    echo $ex->getMessage();
}