<?php
declare(strict_types = 1);

use SmartPhone\Smartphone;

require_once 'ICall.php';
require_once 'IBrowse.php';
require_once 'Smartphone.php';

$phones = explode(' ',trim(fgets(STDIN)));
$urls = explode(' ',trim(fgets(STDIN)));
$smartPhone = new Smartphone();
foreach ($phones as $phone){
    try {
        echo $smartPhone->call($phone);
    }catch (Exception $ex){
        echo $ex->getMessage();
    }
}
foreach ($urls as $url){
    try {
        echo $smartPhone->browse($url);
    }catch (Exception $ex){
        echo $ex->getMessage();
    }
}

