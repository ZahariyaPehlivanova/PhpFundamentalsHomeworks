<?php

namespace Mordor\Foods;


class Lembas extends Food
{
    private $lembasPoints = 3;

    public function getPoints(){
        return $this->lembasPoints;
    }
}