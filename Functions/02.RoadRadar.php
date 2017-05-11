<?php
$speed = intval(trim(fgets(STDIN)));
$area = trim(fgets(STDIN));
if(!isInLimit($speed,$area)){
    $sev = calcSeverity($speed,$area);
    if ($sev <= 20) {
        echo 'speeding';
    } else if ($sev <= 40) {
        echo 'excessive speeding';
    } else {
        echo 'reckless driving';
    }
}

function isInLimit(float $speed, string $area): bool
{
    switch ($area) {
        case 'motorway': return $speed < 130;
        case 'interstate': return $speed < 90;
        case 'city': return $speed < 50;
        case 'residential': return $speed < 20;
        default:return false;
    }
}

function calcSeverity(float $speed, string $area): float
{
    switch ($area) {
        case 'motorway': return $speed - 130;
        case 'interstate': return $speed - 90;
        case 'city': return $speed - 50;
        case 'residential': return $speed - 20;
        default:return 0;
    }
}