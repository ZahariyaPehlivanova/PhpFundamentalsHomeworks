<?php
declare(strict_types = 1);

use Ferrari\Ferrari;

require_once "ICar.php";
require_once "Ferrari.php";


$name = trim(fgets(STDIN));
$ferrari = new Ferrari($name);
echo $ferrari;

