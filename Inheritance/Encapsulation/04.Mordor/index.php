<?php

namespace Mordor;

require_once "FoodFactory.php";
require_once "MoodFactory.php";

require_once "Foods/Food.php";
require_once "Foods/Apple.php";
require_once "Foods/Cram.php";
require_once "Foods/Different.php";
require_once "Foods/HoneyCake.php";
require_once "Foods/Lembas.php";
require_once "Foods/Melon.php";
require_once "Foods/Mushrooms.php";


$foodFactory = new FoodFactory();
$foods = explode(',', trim(fgets(STDIN)));

$points = 0;
foreach ($foods as $foodName){
    $food = $foodFactory->produce($foodName);
    $points += $food->getPoints();
}

$moodFactory = new MoodFactory();
$mood = $moodFactory->produce($points);
echo $points . "\n";
echo $mood;