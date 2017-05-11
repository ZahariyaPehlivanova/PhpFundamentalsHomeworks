<?php
namespace Ferrari;

interface ICar{
    public function getModel() : string;

    public function getDriver() : string;

    public function setDriver(string $driver);

    public function useBrakes();

    public function pushGasPedal();
}