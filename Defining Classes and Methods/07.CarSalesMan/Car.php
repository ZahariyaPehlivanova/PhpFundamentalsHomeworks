<?php
require_once "Engine.php";
class Car
{
    private $model;
    private $engine;
    private $weight;
    private $color;

    public function __construct(string $model,Engine $engine,float $weight = null,string $color = null)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;
    }

    public function __toString()
    {
        $weight = $this->weight == null ? "n/a" : $this->weight;
        $color  = $this->color  == null ? "n/a" : $this->color;
        return "{$this->model}:\n  {$this->engine}\n  Weight: {$weight}\n  Color: {$color}\n";
    }

    public function getModel()
    {
        return $this->model;
    }
}
