<?php

namespace Pizza;


class Dought
{
    const CALORIES_PER_GRAM = 2;

    const DOUGH_TYPES = [
        "White" => 1.5,
        "Wholegrain" => 1.0
    ];
    const BAKING_TECHNIQUES = [
        "Crispy" => 0.9,
        "Chewy" => 1.1,
        "Homemade" => 1.0
    ];

    private $flourType;
    private $bakingTechnique;
    private $weight;

   public function __construct($flourType, $bakingTechnique, $weight)
    {
        $this->setFlourType($flourType);
        $this->setBakingTechnique($bakingTechnique);
        $this->setWeight($weight);
    }

    public function setFlourType($flourType)
    {
        if (!array_key_exists($flourType, self::DOUGH_TYPES)) {
            throw new \Exception("Invalid type of dough.");
        }
        $this->flourType = $flourType;
    }

    public function setBakingTechnique($bakingTechnique)
    {
        if (!array_key_exists($bakingTechnique, self::BAKING_TECHNIQUES)) {
            throw new \Exception("Invalid type of baking technique.");
        }
        $this->bakingTechnique = $bakingTechnique;
    }

    public function setWeight($weight)
    {
        if ($weight < 1 || $weight > 200) {
            throw new \Exception("Dough weight should be in the range [1..200].");
        }

        $this->weight = $weight;
    }

    public function getCalories(): float
    {
        return $this->weight
            * self::CALORIES_PER_GRAM
            * self::DOUGH_TYPES[$this->flourType]
            * self::BAKING_TECHNIQUES[$this->bakingTechnique];
    }
}