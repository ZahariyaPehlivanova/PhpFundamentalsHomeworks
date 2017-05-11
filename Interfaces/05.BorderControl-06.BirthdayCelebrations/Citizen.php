<?php
class Citizen implements IIdentify,IBirthdate{
    private $name;
    private $age;
    private $id;
    private $birthDate;

    public function __construct(string $name,int $age,string $id,string $birthDate)
    {
        $this->name=$name;
        $this->age=$age;
        $this->id=$id;
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
}