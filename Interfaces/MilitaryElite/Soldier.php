<?php

class Soldier
{
    private $id;
    private $name;
    private $lastName;

    public function __construct(string $id,string $name,string $lastName)
    {
        $this->id = $id;
        $this->name = $name;
        $this->lastName = $lastName;
    }
}