<?php
$arr = array_map('floatval', explode(', ', fgets(STDIN)));
$len = count($arr);

for ($i = 0;$i < $len;$i+=3){
    $x = $arr[$i];
    $y = $arr[$i+1];
    $z = $arr[$i + 2];
    if(isInsideVolume($x,$y,$z)){
        echo 'inside' . "\n";
    }else{
        echo 'outside'. "\n";
    }
}

function isInsideVolume(float $x,float $y,float $z) : bool {
    $x1 = 10; $x2 = 50;
    $y1 = 20; $y2 = 80;
    $z1 = 15; $z2 = 50;

    $isInsideX = isInsidePoint($x1,$x2,$x);
    $isInsideY = isInsidePoint($y1,$y2,$y);
    $isInsideZ = isInsidePoint($z1,$z2,$z);
    
    return $isInsideX && $isInsideY && $isInsideZ;
}
function isInsidePoint(float $small, float $big, $point){
    return $point >= $small && $point <= $big;
}

