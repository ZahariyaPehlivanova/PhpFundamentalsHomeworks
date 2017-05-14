<?php

namespace MassEffect\Models;


use MassEffect\Models\Ships\ShipInterface;

interface StarSystemInterface
{
    public function getName(): string;

    public function getNeighbours(): array;

    public function getShips(): array;

    public function addShip(ShipInterface $ship);

    public function removeShip(string $shipName);
}