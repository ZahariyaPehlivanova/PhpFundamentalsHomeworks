<?php

namespace RawData;


class Car
{
    private $model;
    private $engine;
    private $cargo;
    private $tires = [];

    public function __construct($model,Engine $engine,Cargo $cargo, Tire $tire1, Tire $tire2, Tire $tire3, Tire $tire4)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        array_push($this->tires, $tire1, $tire2, $tire3, $tire4);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return Engine
     */
    public function getEngine(): Engine
    {
        return $this->engine;
    }

    /**
     * @param Engine $engine
     */
    public function setEngine(Engine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return Cargo
     */
    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    /**
     * @param Cargo $cargo
     */
    public function setCargo(Cargo $cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return array
     */
    public function getTires(): array
    {
        return $this->tires;
    }

    /**
     * @param array $tires
     */
    public function setTires(array $tires)
    {
        $this->tires = $tires;
    }



    public function __toString()
    {
        return $this->model . "\n";
    }
}