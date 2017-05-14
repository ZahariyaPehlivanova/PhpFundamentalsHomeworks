<?php

namespace MassEffect\Models\Ships;


use MassEffect\Models\Projectiles\Laser;
use MassEffect\Models\Projectiles\ProjectileInterface;

class Dreadnought extends Ship
{
    public function __construct($name)
    {
        $health = 200;
        $shields = 300;
        $damage = 150;
        $fuel = 700;
        $projectile = new Laser();

        parent::__construct($health, $shields, $damage, $fuel, $projectile);
    }

    public function getProjectileDamage(): int
    {
        return $this->getDamage() + floor($this->getShields() / 2);
    }
    public function takeDamage(ProjectileInterface $projectile)
    {
        $this->setShields($this->getShields() + 50);
        $projectile->doDamage($this);
        $this->setShields(max($this->getShields() - 50, 0));
    }
}