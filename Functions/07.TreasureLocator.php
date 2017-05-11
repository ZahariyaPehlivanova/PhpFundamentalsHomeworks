<?php
$arr = array_map('floatval', explode(', ', fgets(STDIN)));
$len = count($arr);
for ($i = 0;$i < $len;$i+=2){
    $x = $arr[$i];
    $y = $arr[$i + 1];
    isInsideIsland($x,$y);
}
function isInsideIsland(float $x, float $y){
    if($x >= 8 && $x <= 9 && $y >= 0 && $y <= 1){
        echo "Tokelau \n";
    }else if($x >= 1 && $x <= 3 && $y >= 1 && $y <= 3){
        echo "Tuvalu \n";
    }else if($x >= 5 && $x <= 7 && $y >= 3 && $y <= 6){
        echo "Samoa \n";
    }else if($x >= 0 && $x <= 2 && $y >= 6 && $y <= 8){
        echo "Tonga\n";
    }else if($x >= 4 && $x <= 9 && $y >= 7 && $y <= 8){
        echo "Cook\n";
    }else{
        echo "On the bottom of the ocean\n";
    }
}