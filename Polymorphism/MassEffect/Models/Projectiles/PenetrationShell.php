<?php

namespace MassEffect\Models\Projectiles;


use MassEffect\Models\Ships\ShipInterface;

class PenetrationShell extends Projectile
{
    public function doDamage(ShipInterface $targetShip)
    {
        $newHealth = $targetShip->getHealth() - $this->getDamage();
        $newHealth = max(0, $newHealth);
        $targetShip->setHealth($newHealth);
    }
}