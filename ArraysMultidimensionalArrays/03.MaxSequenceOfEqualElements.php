<?php
$arr = array_filter(array_map('trim', explode(' ', fgets(STDIN))));
$bestLength = 0;
$bestStartIndex = -1;
for ($i = 0; $i < count($arr); $i++) {
    $currentCount = 1;
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$j] == $arr[$i]) {
            $currentCount++;
        } else {
            break;
        }
    }
    if ($currentCount > $bestLength) {
        $bestLength = $currentCount;
        $bestStartIndex = $i;
    }
}
echo implode(' ', array_fill(0, $bestLength, $arr[$bestStartIndex]));