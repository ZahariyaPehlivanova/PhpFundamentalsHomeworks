<?php

namespace WildFarm;


abstract class Animal
{
    private $name;
    private $type;
    private $weight;
    private $foodEaten;
    private $region;
    protected $sound;

    public function __construct(string $type,string $name,float $weight,string $region)
    {
        $this->type = $type;
        $this->name = $name;
        $this->weight = $weight;
        $this->region = $region;
        $this->setFoodEaten(0);
    }

    protected function getName(): string
    {
        return $this->name;
    }

    protected function getType(): string
    {
        return $this->type;
    }

    protected function getWeight(): float
    {
        return $this->weight;
    }

    protected function getRegion(): string
    {
        return $this->region;
    }

    protected function getFoodEaten(): int
    {
        return $this->foodEaten;
    }

    public function setFoodEaten(int $foodEaten)
    {
        $this->foodEaten = $foodEaten;
    }

    public function makeSound(){
        return $this->sound;
    }

    protected abstract function eat(Food $food);

    protected function getClassName(): string
    {
        return basename(get_class($this));
    }

    public function __toString()
    {
        return "{$this->getClassName()}[{$this->name}, {$this->weight}, {$this->region}, {$this->foodEaten}]";
    }
}