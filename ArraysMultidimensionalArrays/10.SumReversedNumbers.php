<?php
$arr = array_map('trim', explode(' ', fgets(STDIN)));
$len = count($arr);

$sum = 0;
for($i = 0; $i < $len;$i++){
    $str = intval(strrev($arr[$i]));
        $sum += $str;
}
echo $sum;