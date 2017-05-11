<?php

namespace Vehicles;

require_once "VehicleInterface.php";
require_once "Vehicle.php";
require_once "Car.php";
require_once "Truck.php";

$carInformation = explode(' ',trim(fgets(STDIN)));
$car = new Car(floatval($carInformation[1]),floatval($carInformation[2]));

$truckInformation = explode(' ',trim(fgets(STDIN)));
$truck = new Truck(floatval($truckInformation[1]),floatval($truckInformation[2]));

$n = intval(trim(fgets(STDIN)));

while ($n--){
    $input = explode(' ',trim(fgets(STDIN)));
    try {
        if ($input[0] === "Drive") {
            if ($input[1] === "Car") {
                echo $car->drive(floatval($input[2]));
            } else {
                echo $truck->drive(floatval($input[2]));
            }
        } else {
            if ($input[1] === "Car") {
               $car->refuel(floatval($input[2]));
            } else {
                $truck->refuel(floatval($input[2]));
            }
        }
    }catch (\Exception $ex){
        echo $ex->getMessage() .PHP_EOL;
    }
}
echo $car;
echo $truck;
