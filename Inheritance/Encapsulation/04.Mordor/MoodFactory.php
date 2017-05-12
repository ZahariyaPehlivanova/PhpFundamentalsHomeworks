<?php

namespace Mordor;

class MoodFactory
{
    public function produce(int $points){
        if($points < -5){
            return "Angry";
        }else if($points >= -5 && $points < 0){
            return "Sad";
        }else if($points >= 0 && $points < 15){
            return "Happy";
        }else if($points >= 50){
            return "PHP";
        }
    }
}