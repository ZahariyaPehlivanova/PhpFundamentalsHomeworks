<?php

namespace WildFarm;

class Cat extends Felime
{
    const SOUND = "Meowwww";
    private $breed;
    public function __construct($type, $name, $weight, $region,string $breed)
    {
        parent::__construct($type, $name, $weight,$region);
        $this->sound = self::SOUND;
        $this->breed = $breed;
    }

    public function eat(Food $food)
    {
        $this->setFoodEaten($this->getFoodEaten() + $food->getQuantity());
    }

    public function __toString()
    {
        return "{$this->getClassName()}[{$this->getName()},{$this->breed} ,{$this->getWeight()}, {$this->getRegion()}, {$this->getFoodEaten()}]\n";
    }
}