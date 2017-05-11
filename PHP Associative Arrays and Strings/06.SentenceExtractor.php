<?php
$text = trim(fgets(STDIN));
$word = trim(fgets(STDIN));
preg_match_all("/([^.?!]*\\b" . $word . "\\b[^.?!]*[.?!]+)/", $text, $result);
foreach ($result[0] as $item) {
    echo trim($item) . "\n";
}
