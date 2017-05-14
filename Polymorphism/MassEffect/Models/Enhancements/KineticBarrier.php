<?php

namespace MassEffect\Models\Enhancements;


use MassEffect\Models\Ships\ShipInterface;

class KineticBarrier extends Enhancement
{
    const SHIELD_BONUS = 100;

    public function enhance(ShipInterface $ship)
    {
        $ship->setShields($ship->getShields() + self::SHIELD_BONUS);
    }
}