<?php
$arr = array_map('floatval', explode(', ', fgets(STDIN)));

$x1 = $arr[0];
$y1 = $arr[1];
$x2 = $arr[2];
$y2 = $arr[3];
$x3 = $arr[4];
$y3 = $arr[5];

$distanceAB = calcDistance($x1,$y1,$x2,$y2);
$distanceAC = calcDistance($x1,$y1,$x3,$y3);
$distanceBC = calcDistance($x2,$y2,$x3,$y3);
result($distanceAB,$distanceAC,$distanceBC);

function result ($distanceAB, $distanceAC, $distanceBC){
    if($distanceAB <= $distanceAC && $distanceAB <= $distanceBC){
        if($distanceAC <= $distanceBC){
            echo "1->2->3: " . ($distanceAB + $distanceAC);
        }else {
            echo "1->2->3: " . ($distanceAB + $distanceBC);
        }
    } else if ($distanceAC <= $distanceAB && $distanceAC <= $distanceBC) {
        if ($distanceAB <= $distanceBC) {
            echo "2->1->3: " . ($distanceAB + $distanceAC);
        } else {
            echo "1->3->2: " . ($distanceBC + $distanceAC);
        }
    } else {
        if ($distanceAB <= $distanceAC) {
            echo "1->2->3: " . ($distanceAB + $distanceBC);
        } else {
            echo "1->3->2: " . ($distanceBC + $distanceAC);
        }
    }
}

function calcDistance(int $x1,int $y1,int $x2,int $y2):float{
    return sqrt(pow($x2 - $x1,2) + pow($y2 - $y1,2));
}