<?php
require_once "Pokemon.php";
require_once "Trainer.php";

$trainers = [];
while (true){
    $input = trim(fgets(STDIN));
    if ($input == 'Tournament'){
        break;
    }
    $input = explode(' ',$input);
    $trainerName = $input[0];
    $pokemonName = $input[1];
    $pokemonEl = $input[2];
    $pokemonHealth = floatval($input[3]);
    $pokemon = new Pokemon($pokemonName,$pokemonEl,$pokemonHealth);

    if(!key_exists($trainerName,$trainers)){
        $trainers[$trainerName] = new Trainer($trainerName);
    }
    $trainers[$trainerName]->addPokemon($pokemon);
}

while (true) {
    $element = trim(fgets(STDIN));
    if ($element == 'End') {
        break;
    }
    foreach ($trainers as $key=>$value){
       if ($value->containsElement($element)){
           $value->increaseBadges();
       }else{
           $value->reduceHealth();
       }
    }
}
usort($trainers, function (Trainer $trainerA, Trainer $trainerB) {
    return -($trainerA->getBadges() <=> $trainerB->getBadges());
});
foreach ($trainers as $key=>$value){
    echo $value . PHP_EOL;
}