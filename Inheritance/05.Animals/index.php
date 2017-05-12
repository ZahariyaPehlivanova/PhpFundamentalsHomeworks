<?php

namespace Animals;

require_once "Animal.php";
require_once "Cat.php";
require_once "Dog.php";
require_once "Frog.php";
require_once "Kitten.php";
require_once "Tomcat.php";


try{
    /**
     * @var $animals Animal[]
     */
    $animals = [];

    $animal = trim(fgets(STDIN));
    while ($animal !== "Beast!"){
        $animalInfo = explode(' ', trim(fgets(STDIN)));
        switch ($animal){
            case "Cat"; $animals[] = new Cat($animalInfo[0],$animalInfo[1],$animalInfo[2]); break;
            case "Dog"; $animals[] = new Dog($animalInfo[0],$animalInfo[1],$animalInfo[2]); break;
            case "Frog"; $animals[] = new Frog($animalInfo[0],$animalInfo[1],$animalInfo[2]); break;
            case "Kitten"; $animals[] = new Kitten($animalInfo[0],$animalInfo[1],$animalInfo[2]); break;
            case "Tomcat"; $animals[] = new Tomcat($animalInfo[0],$animalInfo[1],$animalInfo[2]); break;
        }

        $animal = trim(fgets(STDIN));
    }
    foreach ($animals as $animal){
        echo $animal;
    }
}catch (\Exception $ex){
    echo $ex->getMessage();
}

