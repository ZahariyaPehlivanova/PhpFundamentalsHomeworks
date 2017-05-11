<?php
declare(strict_types = 1);
use PersonInterface\Citizen;

require_once 'IPerson.php';
require_once 'IIdentifiable.php';
require_once 'IBirthable.php';
require_once 'Citizen.php';

$name = trim(fgets(STDIN));
$age = intval(trim(fgets(STDIN)));
$id = trim(fgets(STDIN));
$birthdate = trim(fgets(STDIN));
$citizen = new Citizen($name, $age,$id,$birthdate);
echo $citizen;