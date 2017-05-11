<?php
$first = explode(' ', fgets(STDIN));
$sec = explode(' ', fgets(STDIN));

$length = min(count($first),count($sec));
$leftCount = 0;
for ($i = 0; $i < $length;$i++){
    if($first[$i] == $sec[$i]){
        $leftCount++;
    }else{
        break;
    }
}
$rightCount = 0;
$first = array_reverse($first);
$sec = array_reverse($sec);
for ($i = 0; $i < $length;$i++){
    if($first[$i] == $sec[$i]){
        $rightCount++;
    }else{
        break;
    }
}
echo max($leftCount,$rightCount);