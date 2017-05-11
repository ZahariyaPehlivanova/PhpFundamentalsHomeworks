<?php
$num = 145;
$arr = array();
for ($a = 1; $a <= 9; $a++){
    for ($b = 0; $b <= 9; $b++){
        if($b != $a) {
            for ($c = 0; $c <= 9; $c++) {
                if($c != $b && $c != $a){
                    $currString = (int)($a.$b.$c);
                    if($currString <= $num){
                        array_push($arr,$currString);
                    }
                }
            }
        }
    }
}
if(count($arr) > 0){
    echo join(', ', $arr);
}else{
    echo 'no';
}