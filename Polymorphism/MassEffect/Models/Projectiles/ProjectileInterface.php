<?php

namespace MassEffect\Models\Projectiles;


use MassEffect\Models\Ships\ShipInterface;

interface ProjectileInterface
{
    public function getDamage(): int;

    public function doDamage(ShipInterface $targetShip);
}