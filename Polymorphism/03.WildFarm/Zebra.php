<?php

namespace WildFarm;


class Zebra extends Mammal
{
    const SOUND = "Zs";
    public function __construct($type, $name, $weight, $region)
    {
        $this->sound = self::SOUND;
        parent::__construct($type, $name, $weight, $region);
    }

    public function eat(Food $food)
    {
        $type = $food->getClassName();
        if($type !== "Vegetable"){
            throw new \Exception("{$this->getClassName()}s are not eating that type of food!\n");
        }
        $this->setFoodEaten($this->getFoodEaten() + $food->getQuantity());
    }
}