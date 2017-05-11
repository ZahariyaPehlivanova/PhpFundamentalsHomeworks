<?php

namespace WildFarm;

//require_once "Food.php";
//require_once "Meat.php";
//require_once "Vegetable.php";
//
//require_once "Animal.php";
//require_once "Mammal.php";
//require_once "Felime.php";
//require_once "Cat.php";
//require_once "Mouse.php";
//require_once "Tiger.php";
//require_once "Zebra.php";

abstract class Food
{
    private $quantity;

    public function __construct(float $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity() : float {
        return $this->quantity;
    }

    public function getClassName(): string
    {
        return basename(get_class($this));
    }
}

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

abstract class Mammal extends Animal
{
    private $region;

    public function __construct($type, $name, $weight,string $region)
    {
        parent::__construct($type, $name, $weight, $region);
        $this->region = $region;
    }
}

abstract class Felime extends Animal
{
}

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
        return "{$this->getClassName()}[{$this->getName()}, {$this->breed}, {$this->getWeight()}, {$this->getRegion()}, {$this->getFoodEaten()}]\n";
    }
}

class Meat extends Food
{
}

class Mouse extends Mammal
{
    const SOUND = "SQUEEEAAAK!";
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

class Vegetable extends Food
{

}

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

while (true) {
    $input = trim(fgets(STDIN));
    if($input=== "End"){
        break;
    }
    $animalInfo = explode(' ', $input);
    $animalType = $animalInfo[0];

    $animal = null;

    switch ($animalType){
        case "Cat": $animal = new Cat($animalInfo[0],$animalInfo[1],floatval($animalInfo[2]),$animalInfo[3],$animalInfo[4]);break;
        case "Tiger": $animal = new Tiger($animalInfo[0],$animalInfo[1],floatval($animalInfo[2]),$animalInfo[3]);break;
        case "Zebra": $animal = new Zebra($animalInfo[0],$animalInfo[1],floatval($animalInfo[2]),$animalInfo[3]); break;
        case "Mouse": $animal = new Mouse($animalInfo[0],$animalInfo[1],floatval($animalInfo[2]),$animalInfo[3]); break;
    }

    $food = null;
    $foodInfo = explode(' ', trim(fgets(STDIN)));
    if($foodInfo[0] === "Vegetable"){
        $food = new Vegetable(floatval($foodInfo[1]));
    }
    else{
        $food = new Meat(floatval($foodInfo[1]));
    }
    try {
        echo $animal->makeSound() . PHP_EOL;
        $animal->eat($food);
    }catch (\Exception $ex){
        echo $ex->getMessage();
    }
    echo $animal . PHP_EOL;
}
