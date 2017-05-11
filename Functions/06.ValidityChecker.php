<?php
$arr = array_map('floatval', explode(', ', fgets(STDIN)));
$x1 = $arr[0];
$y1 = $arr[1];
$x2 = $arr[2];
$y2 = $arr[3];
$x = 0;
$y = 0;

$distanceA = calcDistance($x1,$y1,$x,$y);
$distanceB = calcDistance($x2,$y2,$x,$y);
$distanceAB = calcDistance($x1,$y1,$x2,$y2);

printResult($distanceA,$x1,$y1,$x,$y);
printResult($distanceB,$x2,$y2,$x,$y);
printResult($distanceAB,$x1,$y1,$x2,$y2);

function calcDistance(int $x1,int $y1,int $x2,int $y2):float{
    return sqrt(pow($x2 - $x1,2) + pow($y2 - $y1,2));
}
function printResult(float $distance,int $x1,int $y1,int $x2,int $y2){
    if(round($distance) == $distance){
        echo "{{$x1}, {$y1}} to {{$x2}, {$y2}} is valid \n";
    }else {
        echo "{{$x1}, {$y1}} to {{$x2}, {$y2}} is invalid \n";
    }
}