<?php
class Person{
    private $name;
    private $age;
    public function __construct(string $name,int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function __toString()
    {
        return $this->name . " " . $this->age;
    }

    public function getAge()
    {
        return $this->age;
    }
}