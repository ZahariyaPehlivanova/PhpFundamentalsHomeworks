<?php

namespace PersonInterface;

class Citizen implements IPerson, IBirthable,IIdentifiable
{
    private $name;
    private $age;
    private $id;
    private $birthdate;

    public function __construct(string $name, int $age,string $id,string $birthdate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthdate($birthdate);
    }
    public function getName(): string
    {
        return $this->name;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    public function getAge(): int
    {
        return $this->age;
    }
    
    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function getBirthdate() : string
    {
        return $this->birthdate;
    }

    public function setBirthdate(string $birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function __toString()
    {
        return "{$this->getName()} \n{$this->getAge()} \n{$this->getId()} \n{$this->getBirthdate()}";
    }
}