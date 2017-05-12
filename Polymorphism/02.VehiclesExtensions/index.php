<?php

namespace VehiclesExtension;

//require_once "VehicleInterface.php";
//require_once "Vehicle.php";
//require_once "Car.php";
//require_once "Truck.php";
//require_once "Bus.php";

//interface VehicleInterface{
//
//    public function drive(float $distance): string;
//
//    public function refuel(float $amount);
//}
//abstract class Vehicle implements VehicleInterface
//{
//    protected $fuel;
//    protected $fuelConsumption;
//    protected $tankCapacity;
//
//    public function __construct(float $fuel, float $fuelConsumption,float $tankCapacity)
//    {
//        $this->fuel = $fuel;
//        $this->setFuelConsumption($fuelConsumption);
//        $this->tankCapacity = $tankCapacity;
//    }
//
//    public function drive(float $distance): string
//    {
//        $fuelNeeded = $distance * $this->fuelConsumption;
//        if ($fuelNeeded > $this->fuel)  {
//            throw new \Exception("{$this->getClassName()} needs refueling");
//        }
//        if($this->fuel -= $fuelNeeded < 0){
//            throw new \Exception("Fuel must be a positive number");
//        }
//
//        $this->fuel -= $fuelNeeded;
//        return "{$this->getClassName()} travelled {$distance} km\n";
//    }
//
//    protected abstract function setFuelConsumption(float $consumption);
//
//    private function getClassName(): string
//    {
//        return basename(get_class($this));
//    }
//
//    public function __toString()
//    {
//        $fuel = number_format($this->fuel, 2, '.', '');
//        return "{$this->getClassName()}: {$fuel}\n";
//    }
//}
//class Bus extends Vehicle
//{
//    protected function setFuelConsumption(float $consumption)
//    {
//        $this->fuelConsumption = $consumption;
//    }
//
//    public function refuel(float $amount)
//    {
//        if(($this->fuel += $amount) > $this->tankCapacity){
//            throw new \Exception("Cannot fit fuel in tank");
//        }
//        $this->fuel += $amount;
//    }
//
//    public function drive(float $distance, bool $empty = false): string
//    {
//        if (!$empty) {
//            $this->fuelConsumption += 1.4;
//            $res = parent::drive($distance);
//            $this->fuelConsumption -= 1.4;
//            return $res;
//        }
//        return parent::drive($distance);
//    }
//}
//
//class Car extends Vehicle
//{
//    protected function setFuelConsumption(float $consumption)
//    {
//        $this->fuelConsumption = $consumption + 0.9;
//    }
//    public function refuel(float $amount)
//    {
//        if(($this->fuel += $amount) > $this->tankCapacity){
//            throw new \Exception("Cannot fit fuel in tank");
//        }
//        $this->fuel += $amount;
//    }
//}
//
//class Truck extends Vehicle
//{
//    protected function setFuelConsumption(float $consumption)
//    {
//        $this->fuelConsumption = $consumption + 1.6;
//    }
//    public function refuel(float $amount)
//    {
//        $this->fuel += ($amount * 0.95);
//    }
//}
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
