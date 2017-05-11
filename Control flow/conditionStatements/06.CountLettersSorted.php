<?php
$str = fgets(STDIN);
$result = [];
$length = strlen($str);
for($i = 0;$i < $length;$i++){
    $ch = $str[$i];
    if(ord($ch) >= ord('a') && ord($ch) <= ord('z')) {
        if(!array_key_exists($ch,$result)){
            $result[$ch] = 0;
        }
        $result[$ch]++;
    }
}
arsort($result,SORT_NUMERIC);
foreach ($result as $key=>$value){
    echo $key . ' -> ' . $value . "\n";
}