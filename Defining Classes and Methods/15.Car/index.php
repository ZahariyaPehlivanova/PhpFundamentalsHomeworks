<?php
namespace Car;

require_once "Car.php";

$carParams = explode(' ',trim(fgets(STDIN)));
$speed = floatval($carParams[0]);
$fuel = floatval($carParams[1]);
$fuelEconomy = floatval($carParams[2]);

$car = new Car($speed,$fuel,$fuelEconomy);
while (true){
    $input = explode(' ',trim(fgets(STDIN)));
    $command = $input[0];
    if($command === "END"){
        break;
    }
    switch ($command){
        case 'Travel':
            $distance = floatval($input[1]);
            $car->travel($distance);
            break;
        case 'Refuel': $car->refuel(floatval($input[1])); break;
        case 'Distance': $car->getDistance();break;
        case 'Time': $car->getTime(); break;
        case 'Fuel': $car->getFuel();break;
    }
}
$time = $car->getTime();
$fuel = number_format($car->getFuel(),1,".","");
$distance = number_format($car->getDistance(),1,".","");

echo "Total Distance: {$distance} 
Total Time: {$time['hours']} hours and {$time['minutes']} minutes
Fuel left: {$fuel} liters";
