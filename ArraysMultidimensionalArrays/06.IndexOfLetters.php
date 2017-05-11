<?php
$str = strtolower(fgets(STDIN));
$len = strlen($str);
for($i = 0;$i < $len;$i++){
    $ch = $str[$i];
    if(ord($ch) >= ord('a') && ord($ch) <= ord('z')){
        $place =  ord($ch) - ord('a');
        echo "{$ch} -> {$place} \n";
    }
}