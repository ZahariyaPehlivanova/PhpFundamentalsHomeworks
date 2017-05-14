<?php

namespace VehiclesExtension;

require_once "VehicleInterface.php";
require_once "Vehicle.php";
require_once "Car.php";
require_once "Truck.php";
require_once "Bus.php";


$carInformation = explode(' ',trim(fgets(STDIN)));
$car = new Car(floatval($carInformation[1]),floatval($carInformation[2]),floatval($carInformation[3]));

$truckInformation = explode(' ',trim(fgets(STDIN)));
$truck = new Truck(floatval($truckInformation[1]),floatval($truckInformation[2]),floatval($carInformation[3]));

$busInformation = explode(' ',trim(fgets(STDIN)));
$bus = new Bus(floatval($busInformation[1]),floatval($busInformation[2]),floatval($carInformation[3]));

$n = intval(trim(fgets(STDIN)));

while ($n--){
    $input = explode(' ',trim(fgets(STDIN)));
    try {
        if ($input[0] === "Drive") {
            if ($input[1] === "Car") {
                echo $car->drive(floatval($input[2]));
            } else if($input[1] === "Truck"){
                echo $truck->drive(floatval($input[2]));
            }else{
                echo $bus->drive(floatval($input[2]),false);
            }
        } else if($input[0] === "Refuel") {
            if ($input[1] === "Car") {
               $car->refuel(floatval($input[2]));
            } else if($input[1] === "Truck"){
                $truck->refuel(floatval($input[2]));
            }else{
                $bus->refuel(floatval($input[2]));
            }
        }else{
            $bus->drive(floatval($input[2]),true);
        }
    }catch (\Exception $ex){
        echo $ex->getMessage() .PHP_EOL;
    }
}
echo $car;
echo $truck;
echo $bus;
