<?php

namespace MassEffect\Models\Enhancements;


use MassEffect\Models\Ships\ShipInterface;

class ExtendedFuelCells extends Enhancement
{
    const FUEL_BONUS = 200;

    public function enhance(ShipInterface $ship)
    {
        $ship->setFuel($ship->getFuel() + self::FUEL_BONUS);
    }
}