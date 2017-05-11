<?php
require_once "Car.php";
require_once "Engine.php";

$engines = [];
$n = intval(fgets(STDIN));
while ($n--){
    $input = explode(' ',trim(fgets(STDIN)));
    $engine = createEngine($input);
    $currEngineModel = $engine->getModel();
    if(!key_exists($currEngineModel,$engines)){
        $engines[$currEngineModel] = null;
    }
    $engines[$currEngineModel] = $engine;
}

$cars = [];
$m = intval(fgets(STDIN));
while ($m--){
    $input = explode(' ',trim(fgets(STDIN)));
    $car = createCar($input,$engines);
    array_push($cars,$car);
}

foreach ($cars as $car){
    echo $car;
}

function createEngine($input): Engine
{
    $len = count($input);
    $model = $input[0];
    $power = floatval($input[1]);
    $displacement = null;
    $efficiency = null;

    if ($len == 3) {
        if (ctype_digit($input[2])) {
            $displacement = floatval($input[2]);
        } else {
            $efficiency = $input[2];
        }
    } else if ($len == 4) {
        $displacement = floatval($input[2]);
        $efficiency = $input[3];
    }
    return new Engine($model, $power, $displacement, $efficiency);
}

function createCar($input,$engines): Car
{
    $len = count($input);
    $model = $input[0];
    $engine = $engines[$input[1]];
    $weight = null;
    $color = null;

    if ($len == 3) {
        if (ctype_digit($input[2])) {
            $weight = floatval($input[2]);
        } else {
            $color = $input[2];
        }
    } else if ($len == 4) {
        $weight = floatval($input[2]);
        $color = $input[3];
    }
    return new Car($model, $engine, $weight, $color);
}
