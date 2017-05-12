<?php

namespace Mordor\Foods;


class Mushrooms extends Food
{
    private $mushroomsPoints = -10;

    public function getPoints(){
        return $this->mushroomsPoints;
    }
}