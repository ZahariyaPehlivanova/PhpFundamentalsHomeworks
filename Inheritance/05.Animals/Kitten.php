<?php

namespace Animals;


class Kitten extends Animal
{
    public function produceSound()
    {
        return "Miau";
    }

    public function setGender($gender)
    {
        $gender = "female";
        parent::setGender($gender);
    }
}