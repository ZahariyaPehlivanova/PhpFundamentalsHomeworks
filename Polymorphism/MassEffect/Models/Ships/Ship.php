<?php

namespace MassEffect\Models\Ships;


use MassEffect\Models\Projectiles\ProjectileInterface;

class Ship implements ShipInterface
{
    private $health;
    private $shields;
    private $damage;
    private $fuel;
    private $projectile;

    public function __construct($health, $shields, $damage, $fuel, $projectile)
    {
        $this->health = $health;
        $this->shields = $shields;
        $this->damage = $damage;
        $this->fuel = $fuel;
        $this->projectile = $projectile;
    }

    public function getStarSystem(): StarSystemInterface
    {
        // TODO: Implement getStarSystem() method.
    }

    public function setStarSystem(StarSystemInterface $starSystem)
    {
        // TODO: Implement setStarSystem() method.
    }

    public function getName(): string
    {
        // TODO: Implement getName() method.
    }

    public function getDamage(): int
    {
        // TODO: Implement getDamage() method.
    }

    public function setDamage(int $value)
    {
        // TODO: Implement setDamage() method.
    }

    public function getHealth(): int
    {
        // TODO: Implement getHealth() method.
    }

    public function setHealth(int $value)
    {
        // TODO: Implement setHealth() method.
    }

    public function getShields(): int
    {
        // TODO: Implement getShields() method.
    }

    public function setShields(int $value)
    {
        // TODO: Implement setShields() method.
    }

    public function getFuel(): float
    {
        // TODO: Implement getFuel() method.
    }

    public function setFuel(int $value)
    {
        // TODO: Implement setFuel() method.
    }

    public function getProjectileType(): string
    {
        // TODO: Implement getProjectileType() method.
    }

    public function getProjectileDamage(): int
    {
        // TODO: Implement getProjectileDamage() method.
    }

    public function increaseProjectilesFired()
    {
        // TODO: Implement increaseProjectilesFired() method.
    }

    public function isDestroyed(): bool
    {
        // TODO: Implement isDestroyed() method.
    }

    public function addEnhancement(string $name, EnhancementInterface $enhancement)
    {
        // TODO: Implement addEnhancement() method.
    }

    public function takeDamage(ProjectileInterface $projectile)
    {
        // TODO: Implement takeDamage() method.
    }

    public function plotJumpTo(StarSystemInterface $to)
    {
        // TODO: Implement plotJumpTo() method.
    }

    public function getReport(): array
    {
        // TODO: Implement getReport() method.
    }
}