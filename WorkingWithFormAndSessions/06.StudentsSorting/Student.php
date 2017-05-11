<?php
class Student
{
    private $firstName;   
    private $lastName;
    private $email;
    private $grade;

    public function __construct(string $firstName,string $lastName,string $email,float $grade)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->grade = $grade;
     }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function getGrade()
    {
        return $this->grade;
    }
}

