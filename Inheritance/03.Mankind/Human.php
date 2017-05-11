<?php

namespace Mankind;

class Human{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName,string $lastName)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    public function setFirstName($firstName)
    {
        if(!ctype_upper($firstName[0])){
            throw new Exception("Expected upper case letter!Argument: firstName");
        }
        if(strlen($firstName) < 4){
            throw new Exception("Expected length at least 4 symbols!Argument: firstName");
        }
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        if(!ctype_upper($lastName[0])){
            throw new Exception("Expected upper case letter!Argument: lastName");
        }
        if(strlen($lastName) < 3){
            throw new Exception("Expected length at least 3 symbols!Argument: lastName");
        }
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return "First Name: {$this->firstName}\nLast Name: {$this->lastName}\n";
    }
}
