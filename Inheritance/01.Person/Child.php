<?php

namespace Person;

class Child extends Person
{
    public function setAge($age)
    {
        if($age > 16){
            throw new \Exception("Child’s age must be less than 16!");
        }
        parent::setAge($age);
    }
}