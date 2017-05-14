<?php

namespace MassEffect\Models\Projectiles;

abstract class Projectile implements ProjectileInterface
{
    private $damage;

    public function __construct(int $damage)
    {
        $this->damage = $damage;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }
}