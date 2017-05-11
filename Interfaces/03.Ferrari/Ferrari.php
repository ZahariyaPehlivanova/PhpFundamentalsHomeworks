<?php

namespace Ferrari;

class Ferrari implements ICar
{
    private $driver;
    private $model = "488-Spider";

    public function __construct(string $driver)
    {
        $this->setDriver($driver);
    }

    public function getModel() : string
    {
        return $this->model;
    }

    public function getDriver() : string
    {
        return $this->driver;
    }

    public function setDriver(string $driver)
    {
        $this->driver = $driver;
    }

    public function useBrakes() : string
    {
        return "Brakes!";
    }

    public function pushGasPedal() : string
    {
        return "Zadu6avam sA!";
    }

    public function __toString()
    {
        return "{$this->getModel()}/{$this->useBrakes()}/{$this->pushGasPedal()}/{$this->getDriver()}";
    }
}