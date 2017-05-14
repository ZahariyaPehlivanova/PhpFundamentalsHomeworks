<?php

namespace MassEffect\Models\Projectiles;


use MassEffect\Models\Ships\ShipInterface;

class ShieldReaver extends Projectile
{
    public function doDamage(ShipInterface $targetShip)
    {
        $newHealth = $targetShip->getHealth() - $this->getDamage();
        $newHealth = max(0, $newHealth);
        $targetShip->setHealth($newHealth);

        $newShields = $targetShip->getShields() - (2 * $this->getDamage());
        $newShields = max(0, $newShields);
        $targetShip->setShields($newShields);
    }
}