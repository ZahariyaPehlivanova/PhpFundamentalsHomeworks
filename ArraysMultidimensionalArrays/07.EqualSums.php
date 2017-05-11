<?php
$arr = array_map('trim', array_map('intval', explode(' ', fgets(STDIN))));
$len = count($arr);
$found = boolval(false);
for($i = 0; $i < $len;$i++){
    $right = array_sum(array_slice($arr,$i + 1, $len - 1));
    $left = array_sum(array_slice($arr,0, $i));
    if($right == $left){
        $found = true;
        echo $i;
    }
}
if(!$found){
    echo 'no';
}