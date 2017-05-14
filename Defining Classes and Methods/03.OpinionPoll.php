<?php
require_once "01.Person.php";

$n = trim(intval(fgets(STDIN)));
$people = [];
while ($n--){
    list($name, $age) = explode(' ',fgets(STDIN));
    $age = intval($age);
    if($age > 30){
        $people[$name] = $age;
    }
}
ksort($people);

foreach ($people as $key => $value){

    echo $key . " - " . $value . PHP_EOL;
}

