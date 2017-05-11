<?php
require_once "Person.php";
require_once "Product.php";

try{
    $people = [];
    $line1 = explode(';',trim(fgets(STDIN)));
    $len = count($line1) - 1;
    for($i = 0;$i < $len;$i++){
        $currPerson = explode('=',$line1[$i]);
        $name = $currPerson[0];
        $money = floatval($currPerson[1]);
        $person = new Person($name,$money);
        if(!key_exists($name,$people)){
            $people[$name] = $person;
        }
    }

    $products = [];
    $line2 = explode(';',trim(fgets(STDIN)));
    $len = count($line2) - 1;
    for($i = 0;$i < $len;$i++){
        $currProduct = explode('=',$line2[$i]);
        $name = $currProduct[0];
        $price = floatval($currProduct[1]);
        $product = new Product($name,$price);
        if(!key_exists($name,$products)){
            $products[$name] = $product;
        }
    }
    while (true){
        $input = explode(' ',trim(fgets(STDIN)));
        if($input[0] === "END"){
            break;
        }
        $personName = $input[0];
        $productName = $input[1];
        $people[$personName]->buyProduct($products[$productName]);
    }
    foreach ($people as $person){
        echo $person;
    }
}catch (Exception $ex){
    echo $ex->getMessage();
}