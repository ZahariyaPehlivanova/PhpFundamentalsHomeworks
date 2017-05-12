<?php

namespace Mordor\Foods;

class Cram extends Food
{
    private $cramPoints = 2;

    public function getPoints(){
        return $this->cramPoints;
    }
}