<?php

namespace WildFarm;

class Tiger extends Felime
{
    const SOUND = "ROAAR!!!";
    public function __construct($type, $name, $weight, $region)
    {
        $this->sound = self::SOUND;
        parent::__construct($type, $name, $weight, $region);
    }

    public function eat(Food $food)
    {
        $type = $food->getClassName();
        if($type !== "Meat"){
            throw new \Exception("{$this->getClassName()}s are not eating that type of food!\n");
        }
        $this->setFoodEaten($this->getFoodEaten() + $food->getQuantity());
    }
}