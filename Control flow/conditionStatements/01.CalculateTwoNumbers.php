<?php
$operation = $argv[1];
$num1 = (int)fgets(STDIN);
$num2 = (int)fgets(STDIN);

echo $num1 + $num2;
if($operation == "sum"){
    echo " == " . ($num1 + $num2);
}else if ($operation == "subtract"){
    echo " == " . ($num1 - $num2);
}else {
    echo " == Wrong operation supplied";
}