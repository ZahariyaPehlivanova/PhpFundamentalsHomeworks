<?php

namespace MassEffect\Models\Projectiles;


use MassEffect\Models\Ships\ShipInterface;

class Laser extends Projectile
{
    public function doDamage(ShipInterface $targetShip)
    {
        $attackResult = $this->getDamage() - $targetShip->getShields();

        $newShields = $targetShip->getShields() - $this->getDamage();
        $newShields = max(0, $newShields);

        $targetShip->setShields($newShields);
        $leftoverDamage = max(0, $attackResult);

        $newHealth = $targetShip->getHealth() - $leftoverDamage;
        $newHealth = max(0, $newHealth);

        $targetShip->setHealth($newHealth);
    }
}