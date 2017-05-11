<?php

namespace MooD;

require_once "Character.php";
require_once "Archangel.php";
require_once "Demon.php";

$input = explode(' | ',trim(fgets(STDIN)));

$character = null;
switch ($input[1]){
    case "Demon" : $character = new Demon($input[0],$input[2],$input[3]);break;
    case "Archangel" : $character = new Archangel($input[0],$input[2],$input[3]); break;
}
echo $character;