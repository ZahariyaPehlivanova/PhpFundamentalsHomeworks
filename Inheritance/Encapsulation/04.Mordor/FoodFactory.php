<?php

namespace Mordor;

use Mordor\Foods\Apple;
use Mordor\Foods\Cram;
use Mordor\Foods\Different;
use Mordor\Foods\HoneyCake;
use Mordor\Foods\Lembas;
use Mordor\Foods\Melon;
use Mordor\Foods\Mushrooms;

class FoodFactory
{
    public function produce(string $food){
        switch (strtolower($food)){
            case "cram": return new Cram(); break;
            case "lembas": return new Lembas(); break;
            case "apple": return new Apple(); break;
            case "melon": return new Melon(); break;
            case "honeycake": return new HoneyCake(); break;
            case "mushrooms": return new Mushrooms(); break;
            default: return new Different(); break;
        }
    }
}