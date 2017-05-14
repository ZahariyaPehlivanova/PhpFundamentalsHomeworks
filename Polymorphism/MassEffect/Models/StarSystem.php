<?php

namespace MassEffect\Models;


use MassEffect\Models\Ships\ShipInterface;

class StarSystem implements StarSystemInterface
{

    private $name;
    /**
     * @var string[]
     */
    private $neighbours;
    /**
     * @var ShipInterface[]
     */
    private $ships = [];

    public function __construct($name, array $neighbours)
    {
        $this->name = $name;
        $this->neighbours = $neighbours;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addShip(ShipInterface $ship)
    {
        $this->ships[$ship->getName()] = $ship;
        $ship->setStarSystem($this);
    }

    public function removeShip(string $shipName)
    {
        unset($this->ships[$shipName]);
    }

    public function getNeighbours(): array
    {
        return $this->neighbours;
    }

    public function getShips(): array
    {
        return array_values($this->ships);
    }
}