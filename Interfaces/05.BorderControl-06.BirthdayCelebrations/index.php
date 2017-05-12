<?php
declare(strict_types = 1);

require_once "IBirthdate.php";
require_once "IIdentify.php";
require_once "Citizen.php";
require_once "Robot.php";
require_once "Pet.php";

$result = [];
while (true){
    $input = explode(' ',trim(fgets(STDIN)));
    if($input[0] === "End"){
        break;
    }
    $len = count($input);
    if($input[0] === "Citizen"){
        $citizen = new Citizen($input[1],intval($input[2]),$input[3],$input[4]);
        $result[] = $citizen;
    }else if ($input[0] === "Pet"){
        $pet = new Pet($input[1], $input[2]);
        $result[] = $pet;
    }

}
$year = trim(fgets(STDIN));
foreach ($result as $entry){
    if (preg_match("/" . $year . "$/", $entry->getBirthdate())) {
        echo $entry->getBirthdate() . PHP_EOL;
    }
}