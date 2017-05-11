<?php

namespace VehiclesExtension;

abstract class Vehicle implements VehicleInterface
{
    protected $fuel;
    protected $fuelConsumption;
    protected $tankCapacity;

    public function __construct(float $fuel, float $fuelConsumption,float $tankCapacity)
    {
        $this->fuel = $fuel;
        $this->setFuelConsumption($fuelConsumption);
        $this->tankCapacity = $tankCapacity;
    }

    public function drive(float $distance): string
    {
        $fuelNeeded = $distance * $this->fuelConsumption;
        if ($fuelNeeded > $this->fuel)  {
            throw new \Exception("{$this->getClassName()} needs refueling");
        }
        if($this->fuel -= $fuelNeeded < 0){
            throw new \Exception("Fuel must be a positive number");
        }

        $this->fuel -= $fuelNeeded;
        return "{$this->getClassName()} travelled {$distance} km\n";
    }

    protected abstract function setFuelConsumption(float $consumption);

    private function getClassName(): string
    {
        return basename(get_class($this));
    }

    public function __toString()
    {
        $fuel = number_format($this->fuel, 2, '.', '');
        return "{$this->getClassName()}: {$fuel}\n";
    }
}