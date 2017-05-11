<?php
$variable = 1.23;
if(is_numeric($variable)){
    echo (var_dump($variable));
}else{
    echo (gettype($variable));
}