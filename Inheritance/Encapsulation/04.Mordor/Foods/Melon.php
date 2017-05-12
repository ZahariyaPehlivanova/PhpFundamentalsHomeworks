<?php

namespace Mordor\Foods;


class Melon extends Food
{
    private $melonPoints = 1;

    public function getPoints(){
        return $this->melonPoints;
    }
}