<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 13/05/2017
 * Time: 00:06
 */

namespace SpeedRacing;


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
            throw new \Exception("Insufficient fuel for the drive");
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