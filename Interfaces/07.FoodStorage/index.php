<?php
declare(strict_types = 1);

require_once "IBirthdate.php";
require_once "IIdentify.php";
require_once "IBuyer.php";
require_once "Citizen.php";
require_once "Rebel.php";

$n = intval(trim(fgets(STDIN)));
$result = [];
for ($i = 0; $i < $n; $i++){
    $input = explode(' ', trim(fgets(STDIN)));
    $len = count($input);

    if($len === 4){
        $citizen = new Citizen($input[0],intval($input[1]), $input[2], $input[3]);
        $result[$input[0]] = $citizen;
    }else if ($len === 3){
        $rebel = new Rebel($input[0], intval($input[1]), $input[2]);
        $result[$input[0]] = $rebel;
    }
}
$sum = 0;
while (($name = trim(fgets(STDIN))) !== "End"){
    if(key_exists($name, $result)){
        $result[$name]->buyFood();
        $sum += $result[$name]->getFood();
    }
}
echo $sum;