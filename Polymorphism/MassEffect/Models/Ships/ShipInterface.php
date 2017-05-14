<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 14/05/2017
 * Time: 17:01
 */

namespace MassEffect\Models\Ships;


use MassEffect\Models\Projectiles\ProjectileInterface;

interface ShipInterface
{
    public function getStarSystem(): StarSystemInterface;

    public function setStarSystem(StarSystemInterface $starSystem);

    public function getName(): string;

    public function getDamage(): int;

    public function setDamage(int $value);

    public function getHealth(): int;

    public function setHealth(int $value);

    public function getShields(): int;

    public function setShields(int $value);

    public function getFuel(): float;

    public function setFuel(int $value);

    public function getProjectileType(): string;

    public function getProjectileDamage(): int;

    public function increaseProjectilesFired();

    public function isDestroyed(): bool;

    public function addEnhancement(string $name, EnhancementInterface $enhancement);

    public function takeDamage(ProjectileInterface $projectile);

    public function plotJumpTo(StarSystemInterface $to);

    public function getReport(): array;
}