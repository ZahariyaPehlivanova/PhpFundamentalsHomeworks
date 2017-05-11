<?php
$arr = array_map('trim', explode(' ', fgets(STDIN)));
$result = [];
$len = count($arr);
for ($i = 0; $i < $len; $i++) {
    $curr = $arr[$i];
    if(!array_key_exists($curr,$result)){
        $result[$curr] = 0;
    }
    $result[$curr]++;
}
arsort($result,SORT_NUMERIC);
echo array_keys($result)[0];