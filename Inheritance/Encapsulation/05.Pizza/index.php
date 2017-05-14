<?php

namespace Pizza;

require_once "Dought.php";
require_once "Topping.php";
require_once "Pizza.php";

try {
    while (($input = trim(fgets(STDIN))) !== "END") {

        $pizzaInfo = explode(' ', $input);
        $name = $pizzaInfo[1];
        $toppings = intval($pizzaInfo[2]);
        $pizza = new Pizza($name, $toppings);

        $doughInfo = explode(' ', trim(fgets(STDIN)));

        $type = ucfirst(strtolower($doughInfo[1]));
        $technique = ucfirst(strtolower($doughInfo[2]));
        $weight = intval($doughInfo[3]);
        $dough = new Dought($type, $technique, $weight);
        $pizza->setDough($dough);

        for ($i = 0; $i < $toppings; $i++){
            $toppingInfo = explode(' ', trim(fgets(STDIN)));
            $type = ucfirst(strtolower($toppingInfo[1]));
            $weight = intval($toppingInfo[2]);
            $topping = new Topping($type, $weight);
            $pizza->addTopping($topping);
        }

        echo $pizza;
    }
}catch (\Exception $ex){
    echo $ex->getMessage();
}
