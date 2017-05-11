<?php
$arr = array_map('trim', array_map('intval', explode(' ', fgets(STDIN))));
$len = count($arr);
while (true){
    $input = explode(' ',trim(fgets(STDIN)));
    $command = $input[0];
    if($command === "print"){
        break;
    }
    switch ($command){
        case 'add': $arr = add($arr,intval($input[1]),$input[2]);break;
        case 'addMany' : $arr = addMany($arr,$input); break;
        case 'contains' : echo contains($arr,$input[1]) . PHP_EOL;break;
        case 'remove': $arr = remove($arr,intval($input[1]));break;
        case 'shift': $arr = shift($arr,intval($input[1]));break;
        case 'sumPairs': $arr = sumPairs($arr);break;
    }
}
$result = implode(', ',$arr);
echo "[{$result}]\n";

function add(array $arr,int $index, string $el){
    array_splice($arr,$index,0,$el);
    return $arr;
}

function addMany($arr, $input){
    $asArray = [];
    for($i = 2;$i < count($input);$i++){
        $asArray[] = $input[$i];
    }
    $index = intval($input[1]);
    array_splice($arr,$index,0,$asArray);
    return $arr;
}

function contains($arr,$el){
    if(in_array($el,$arr)){
        return array_search($el,$arr);
    }
    return "-1";
}

function remove($arr, $index){
    unset($arr[$arr[$index - 1]]);
    return $arr;
}

function shift($arr,$positions){
    for($i = 0;$i < $positions;$i++){
        $curr = array_shift($arr);
        array_push($arr,$curr);
    }
    return $arr;
}

function sumPairs($arr){
    $len = count($arr);
    $result = [];
    $index = 0;
    for ($i = 0;$i < $len;$i+=2){
        $result[$index] = $arr[$i] + $arr[$i + 1];
        $index++;
    }
    return $result;
}
