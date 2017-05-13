<?php

namespace SpeedRacing;

//require_once "Car.php";

/**
 * @var Car[]
 */
$cars = [];

$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++){
    $input = explode(' ', trim(fgets(STDIN)));
    $model = $input[0];
    $fuel = floatval($input[1]);
    $fuelCost = floatval($input[2]);

    $car = new Car($model,$fuel, $fuelCost);
    $cars[$model] = $car;
}

while (($input = trim(fgets(STDIN))) !== "End"){
    $input = explode(' ', $input);
    $model = $input[1];
    $km = floatval($input[2]);
    try {
        $cars[$model]->drive($km);
    }catch (\Exception $ex){
        echo $ex->getMessage();
    }
}
foreach ($cars as $car){
    echo $car;
}

class Car
{
    private $model;
    private $fuel;
    private $fuelCost;
    private $distance;

    public function __construct($model, $fuel, $fuelCost)
    {
        $this->model = $model;
        $this->fuel = $fuel;
        $this->fuelCost = $fuelCost;
        $this->distance = 0;
    }

    public function drive($km){
        $fuelNeeded = $km * $this->fuelCost;
        if (round($fuelNeeded, 14) > round($this->fuel, 14)) {
            throw new \Exception("Insufficient fuel for the drive\n");
        }
        $this->fuel -= $fuelNeeded;
        $this->fuel = abs($this->fuel);
        $this->distance += $km ;
    }

    public function __toString()
    {
        $fuel = number_format($this->fuel, 2);
        return "{$this->model} {$fuel} {$this->distance}\n";
    }
}