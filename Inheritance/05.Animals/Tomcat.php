<?php

namespace Animals;


class Tomcat extends Animal
{
    public function produceSound()
    {
        return "Give me one million b***h";
    }

    public function setGender($gender)
    {
        $gender = "male";
        parent::setGender($gender);
    }
}