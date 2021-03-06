<?php

namespace RawData;


class Tire
{
    private $age;
    private $pressure;

    public function __construct(int $age, float $pressure)
    {
        $this->age = $age;
        $this->pressure = $pressure;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}