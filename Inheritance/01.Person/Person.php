<?php

namespace Person;


class Person
{
    private $name;
    private $age;
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if(strlen($name) < 3){
            throw new \Exception("Name’s length should not be less than 3 symbols!");
        }
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if($age < 0){
            throw new \Exception("Age must be positive!");
        }
        $this->age = $age;
    }

    public function __toString()
    {
        return "{$this->getName()} -> {$this->getAge()}";
    }
}