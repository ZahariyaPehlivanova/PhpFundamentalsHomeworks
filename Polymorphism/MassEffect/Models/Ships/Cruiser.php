<?php

namespace MassEffect\Models\Ships;


use MassEffect\Models\Projectiles\PenetrationShell;

class Cruiser extends Ship
{
    public function __construct($name)
    {
        $health = 100;
        $shields = 100;
        $damage = 50;
        $fuel = 300;
        $projectile = new PenetrationShell();

        parent::__construct($health, $shields, $damage, $fuel, $projectile);
    }

    public function getProjectileDamage(): int
    {
        return $this->getDamage();
    }
}