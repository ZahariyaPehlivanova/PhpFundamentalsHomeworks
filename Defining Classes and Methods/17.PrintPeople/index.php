<?php

namespace PrintPeople;

require_once "Person.php";

$people = [];
while (($input = trim(fgets(STDIN))) !== "END"){
    $input = explode(' ', $input);
    $name = $input[0];
    $age = intval($input[1]);
    $occupation = $input[2];

    $person = new Person($name, $age, $occupation);
    $people[] = $person;
}

usort($people, function (Person $personA, Person $personB){
    return $personA->getAge() - $personB->getAge();
});

echo implode(PHP_EOL, $people);