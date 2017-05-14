<?php

namespace Google;

require_once "Person.php";
require_once "Company.php";
require_once "Pokemon.php";
require_once "Relative.php";
require_once "Car.php";

$people = [];
while (($input = trim(fgets(STDIN))) !== "End"){
    $input = explode(' ', $input);

    $personName = $input[0];
    if(!array_key_exists($personName, $people)){
        $people[$personName] = new Person($personName);
    }
    $person = $people[$personName];

    $type = $input[1];
    if($type === "company"){
        $companyName = $input[2];
        $department = $input[3];
        $salary = floatval($input[4]);

        $company = new Company($companyName, $department, $salary);

        $person->setCompany($company);
    }else if($type === "pokemon"){
        $pokemonName = $input[2];
        $type = $input[3];

        $pokemon = new Pokemon($pokemonName, $type);

        $person->addPokemon($pokemon);

    }else if($type === "parents"){
        $parentName = $input[2];
        $parentBirthday = $input[3];

        $parent = new Relative($parentName, $parentBirthday);

        $person->addParent($parent);
    }else if($type === "children"){
        $childName = $input[2];
        $childBirthday = $input[3];

        $child = new Relative($childName, $childBirthday);

        $person->addChild($child);
    }else if($type === "car"){
        $model = $input[2];
        $speed = intval($input[3]);

        $car = new Car($model,$speed);

        $person->setCar($car);
    }
}
$name = trim(fgets(STDIN));
echo $people[$name];