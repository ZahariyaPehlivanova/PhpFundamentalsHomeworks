<?php
class Pet implements IBirthdate
{
    private $name;
    private $birthDate;

    public function __construct(string $name,string $birthDate)
    {
        $this->name=$name;
        $this->birthDate=$birthDate;
    }

    public function getBirthdate() : string
    {
        return $this->birthDate;
    }
}