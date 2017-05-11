<?php
$timezone = new DateTimeZone('Europe/Sofia');
$now = new DateTime('now',$timezone);
$year = (int)$now->format("Y");

$newYear = new DateTime("31-12-{$year} 23:59:59",$timezone);

$interval = $newYear->diff($now);
$months = (int)$interval->format('%m');
$days = (int)$interval->format('%a');
$hours =  $days * 24;
$mins = $hours * 60;
$seconds = $mins * 60;

echo $interval->format("Hours until new year : {$hours} <br>");
echo $interval->format("Minutes until new year : {$mins} <br>");
echo $interval->format("Seconds until new year : {$seconds} <br>");
echo $interval->format("Days:Hours:Minutes:Seconds: %a:%h:%i:%s");
