<?php

namespace MassEffect\Models\Ships;


use MassEffect\Models\Projectiles\ShieldReaver;

class Frigate extends Ship
{
    public function __construct($name)
    {
        $health = 60;
        $shields = 50;
        $damage = 30;
        $fuel = 220;
        $projectile = new ShieldReaver();

        parent::__construct($health, $shields, $damage, $fuel, $projectile);
    }

    public function getProjectileDamage(): int
    {
        return $this->getDamage();
    }
}