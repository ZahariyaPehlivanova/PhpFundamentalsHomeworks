<?php
$arr = array_map('intval',(explode(' ', fgets(STDIN))));
$k = (int)fgets(STDIN);
$len = count($arr);

$prev = array_fill(0, $len, 0);;
for($i = 0;$i < $k;$i++){
    $last = array_pop($arr);
    array_unshift($arr, $last);
    for($j = 0;$j < $len;$j++) {
        $prev[$j] += $arr[$j];
    }
}
$result = rtrim(implode(' ', $prev), ' ');
echo $result;
