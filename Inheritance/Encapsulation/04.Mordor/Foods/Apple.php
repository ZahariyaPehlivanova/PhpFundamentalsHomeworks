<?php

namespace Mordor\Foods;


class Apple extends Food
{
    private $applePoints = 1;

    public function getPoints(){
        return $this->applePoints;
    }
}