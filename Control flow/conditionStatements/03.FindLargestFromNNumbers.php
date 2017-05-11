<?php
$largest = PHP_INT_MIN;
while ($num = (int)fgets(STDIN)){
    $largest = max($num, $largest);
}
echo "Max: {$largest}";