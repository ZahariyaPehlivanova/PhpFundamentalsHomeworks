<?php
class Citizen implements IIdentify, IBirthdate, IBuyer{
    private $name;
    private $age;
    private $id;
    private $birthDate;
    private $food = 0;

    public function __construct(string $name,int $age,string $id,string $birthDate)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        $this->birthDate=$birthDate;
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function getBirthdate() : string
    {
       return $this->birthDate;
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
        $this->setFood($this->getFood() + 10);
    }
}