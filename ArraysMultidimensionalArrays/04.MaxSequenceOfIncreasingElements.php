<?php
$arr = array_map('trim', array_map('intval', explode(' ', fgets(STDIN))));
$bestLength = 0;
$bestStartIndex = -1;
for ($i = 0; $i < count($arr); $i++) {
    $currentCount = 1;
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$j] > $arr[$j - 1]) {
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
echo implode(' ', array_slice($arr, $bestStartIndex, $bestLength));