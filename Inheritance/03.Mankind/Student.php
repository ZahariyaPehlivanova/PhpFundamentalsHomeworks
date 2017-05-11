<?php

namespace Mankind;

class Student extends Human{
    private $facultyNumber;

    public function __construct($firstName, $lastName,string $facultyNumber)
    {
        parent::__construct($firstName, $lastName);
        $this->setFacultyNumber($facultyNumber);
    }

    public function setFacultyNumber($facultyNumber)
    {
        if(strlen($facultyNumber) < 5 || strlen($facultyNumber) > 10){
            throw new \Exception("Invalid faculty number!");
        }
        if(!is_numeric($facultyNumber)){
            throw new \Exception("Invalid faculty number!");
        }
        $this->facultyNumber = $facultyNumber;
    }

    public function __toString()
    {
        return parent::__toString() . "Faculty number: {$this->facultyNumber}";
    }
}
