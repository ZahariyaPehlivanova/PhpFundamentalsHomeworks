<?php
$num = floatval(trim(fgets(STDIN)));
$arr = explode(', ', trim(fgets(STDIN)));
foreach ($arr as $command){
    $num = performAction($num,$command);
    echo $num . "\n";
}
function performAction(float $num,string $command) : float {
    if ($command == 'chop'){
        return $num / 2;
    }else if($command == 'dice'){
        return sqrt($num);
    }else if($command == 'spice'){
        return ++$num;
    }else if($command == 'bake'){
        return $num * 3;
    }else {
        return $num - ($num * 20/100);
    }
}
