<?php
$num1 = (int)fgets(STDIN);
$num2 = (int)fgets(STDIN);
$num3 = (int)fgets(STDIN);

$largestFromFirstAndSec = max($num1,$num2);
$largest = max($largestFromFirstAndSec,$num3);
echo "Max: {$largest}";