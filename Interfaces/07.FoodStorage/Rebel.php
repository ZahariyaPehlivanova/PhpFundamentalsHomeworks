<?php
class Rebel implements IBuyer
{
    private $name;
    private $age;
    private $group;
    private $food = 0;

    public function __construct($name, $age, $group)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = $group;
    }

    public function getFood() : int
    {
       return $this->food;
    }
    
    public function setFood(int $value)
    {
        $this->food = $value;
    }

    public function buyFood()
    {
        $this->setFood($this->getFood() + 5);
    }
}
