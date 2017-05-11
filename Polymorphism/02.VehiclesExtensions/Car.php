<?php

namespace VehiclesExtension;

class Car extends Vehicle
{
    protected function setFuelConsumption(float $consumption)
    {
        $this->fuelConsumption = $consumption + 0.9;
    }
    public function refuel(float $amount)
    {
        if(($this->fuel += $amount) > $this->tankCapacity){
            throw new \Exception("Cannot fit fuel in tank");
        }
        $this->fuel += $amount;
    }
}