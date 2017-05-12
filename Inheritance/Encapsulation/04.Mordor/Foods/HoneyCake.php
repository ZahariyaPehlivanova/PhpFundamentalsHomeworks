<?php

namespace Mordor\Foods;


class HoneyCake extends Food
{
    private $honeyCakePoints = 5;

    public function getPoints(){
        return $this->honeyCakePoints;
    }
}