<?php

namespace MassEffect\Models\Enhancements;


use MassEffect\Models\Ships\ShipInterface;

class ThanixCannon extends Enhancement
{
    const DAMAGE_BONUS = 50;

    public function enhance(ShipInterface $ship)
    {
        $ship->setDamage($ship->getDamage() + self::DAMAGE_BONUS);
    }
}