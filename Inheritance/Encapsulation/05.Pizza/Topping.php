<?php

namespace Pizza;


class Topping
{
    const CALORIES_PER_GRAM = 2;

    const TOPPING_TYPES = [
        "Meat" => 1.2,
        "Veggies" => 0.8,
        "Cheese" => 1.1,
        "Sauce" => 0.9
    ];

    private $toppingType;
    private $weight;


    public function __construct($toppingType, $weight)
    {
        $this->setToppingType($toppingType);
        $this->setWeight($weight);
    }

    public function setToppingType($toppingType)
    {
        if (!array_key_exists($toppingType, self::TOPPING_TYPES)) {
            throw new \Exception("Cannot place {$toppingType} on top of your pizza.");
        }

        $this->toppingType = $toppingType;
    }

    public function setWeight($weight)
    {
        if ($weight < 1 || $weight > 50) {
            throw new \Exception("{$this->toppingType} weight should be in the range [1..50].");
        }
        $this->weight = $weight;
    }

    public function getCalories(): float
    {
        return $this->weight
            * self::CALORIES_PER_GRAM
            * self::TOPPING_TYPES[$this->toppingType];
    }
}