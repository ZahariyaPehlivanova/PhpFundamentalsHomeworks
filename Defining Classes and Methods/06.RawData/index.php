<?php

namespace RawData;

require_once "Engine.php";
require_once "Tire.php";
require_once "Cargo.php";
require_once "Car.php";

$n = intval(fgets(STDIN));

$cars = [];
for ($i = 0; $i < $n; $i++){
    $input = explode(' ', trim(fgets(STDIN)));
    $model = $input[0];

    $engineSpeed = intval($input[1]);
    $enginePower = intval($input[2]);

    $cargoWeight = intval($input[3]);
    $cargoType = $input[4];

    $tire1Pressure = doubleval($input[5]);
    $tire1Age = intval($input[6]);
    $tire2Pressure = doubleval($input[7]);;
    $tire2Age = intval($input[8]);
    $tire3Pressure = doubleval($input[9]);
    $tire3Age = intval($input[10]);
    $tire4Pressure = doubleval($input[11]);
    $tire4Age = intval($input[12]);

    $engine = new Engine($engineSpeed, $enginePower);
    $cargo = new Cargo($cargoWeight, $cargoType);
    $tire1 = new Tire($tire1Age, $tire1Pressure);
    $tire2 = new Tire($tire2Age, $tire2Pressure);
    $tire3 = new Tire($tire3Age, $tire3Pressure);
    $tire4 = new Tire($tire4Age, $tire4Pressure);

    $car = new Car($model, $engine, $cargo, $tire1, $tire2, $tire3, $tire4);
    $cars[] = $car;
}

$filtered = [];
$searchedCargoType = trim(fgets(STDIN));
if($searchedCargoType === "flamable"){
    $filtered = getFlammableCars($cars);
}else if($searchedCargoType === "fragile"){
    $filtered = getFragileCars($cars);
}

foreach ($filtered as $car){
    echo $car;
}

function getFlammableCars($cars): array
{
    return array_filter($cars, function (Car $car) {
        if ($car->getCargo()->getType() === "flamable" &&
            $car->getEngine()->getPower() > 250) {
            return true;
        }
        return false;
    });
}

function getFragileCars($cars): array
{
    return array_filter($cars, function (Car $car) {
        if ($car->getCargo()->getType() === "fragile") {
            foreach ($car->getTires() as $tire) {
                if ($tire->getPressure() < 1) {
                    return true;
                }
            }
        }
        return false;
    });
}