<?php
$input = explode(', ',trim(fgets(STDIN)));
$len = count($input);
$res = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<quiz>\n";
for ($i = 0; $i < $len;$i+=2){
    $res .= "    <question>\n";
    $question = $input[$i];
    $res .= "       ".$question . "\n";
    $res .= "    </question>\n";
    $answer = $input[$i+1];
    $res .= "    <answer>\n";
    $res .= "       ".$answer . "\n";
    $res .= "    </answer>\n";
}
$res .= "</quiz>";
echo $res;

