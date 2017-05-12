<?php

namespace Animals;

abstract class Animal
{
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        if($name == null){
           throw new \Exception("Invalid input!");
        }
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if($age == null){
            throw new \Exception("Invalid input!");
        }
        $this->age = $age;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        if($gender == null){
            throw new \Exception("Invalid input!");
        }
        $this->gender = $gender;
    }

    public abstract function produceSound();

    protected function getClassName(): string
    {
        return basename(get_class($this));
    }

    public function __toString()
    {
        return "{$this->getClassName()} {$this->getName()} {$this->getAge()} {$this->getGender()}\n{$this->produceSound()}\n";

    }
}