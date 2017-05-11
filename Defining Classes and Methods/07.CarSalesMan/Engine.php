<?php

class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    public function __construct(string $model,float $power,float $displacement = null,string $efficiency = null)
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }
    
    public function getModel()
    {
        return $this->model;
    }

    public function __toString()
    {
        $displacement = $this->displacement == null ? "n/a" : $this->displacement;
        $efficiency  = $this->efficiency  == null ? "n/a" : $this->efficiency;
        return "{$this->model}:\n   Power: {$this->power}\n   Displacement: {$displacement}\n   Efficiency: {$efficiency}";
    }
}