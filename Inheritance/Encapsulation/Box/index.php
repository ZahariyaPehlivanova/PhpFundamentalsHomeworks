<?php
require_once "Box.php";
try {
    $length = floatval(trim(fgets(STDIN)));
    $width = floatval(trim(fgets(STDIN)));
    $height = floatval(trim(fgets(STDIN)));

    $box = new Box($length, $width, $height);
    echo "Surface Area - " . number_format($box->getSurfaceArea(), 2, ".", "") . PHP_EOL;
    echo "Lateral Surface Area - " . number_format($box->getLateralSurfaceArea(), 2, ".", "") . PHP_EOL;
    echo "Volume - " . number_format($box->getVolume(), 2, ".", "");
}catch (Exception $ex){
    echo $ex->getMessage();
}