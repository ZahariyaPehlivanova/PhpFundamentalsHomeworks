<?php
$firstNumber = 2.20;
$secondNumber = 5.023;
$sum = $firstNumber + $secondNumber;
echo ("With .round: \n");
echo('$firstNumber + $secondNumber = ' . $firstNumber . ' + ' . $secondNumber . ' = ' . round($sum,2));
echo "\n";
echo ("With number_format: \n");
echo('$firstNumber + $secondNumber = ' . $firstNumber . ' + ' . $secondNumber . ' = ' . number_format($sum, 2));
