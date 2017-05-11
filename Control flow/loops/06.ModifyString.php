<form id="formId" method="GET">
    <input type="text" name="input" required><br>
    <input type="radio" name="option" value="Check Palindrome">Check Palindrome<br>
    <input type="radio" name="option" value="Reverse String">Reverse String<br>
    <input type="radio" name="option" value="Split">Split<br>
    <input type="radio" name="option" value="Hash String">Hash String<br>
    <input type="radio" name="option" value="Shuffle String">Shuffle String<br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET) &&
    !empty($_GET) &&
    isset($_GET['option'])) {
    $text = trim($_GET['input']);
    $option = $_GET['option'];
    switch ($option){
        case 'Check Palindrome':isPalindrome($text);break;
        case 'Reverse String': reverse($text);break;
        case 'Split':split($text);break;
        case 'Hash String': hashString($text);break;
        case 'Shuffle String':shuffleString($text);break;
    }
}
function isPalindrome($str){
    if($str == strrev($str)){
        echo $str . ' is palindrome!';
    }
    else{
        echo $str . ' is not a palindrome!';
    }
}

function reverse($str){
    echo strrev($str);
}

function split($str){
    $length = strlen($str);
    $res = '';
    for($i = 0;$i < $length;$i++){
        $ch = $str[$i];
        if(ord($ch) >= ord('a') && ord($ch) <= ord('z')){
            $res .= " {$ch}";
        }
    }
    echo $res;
}

function hashString($str){
    echo crypt($str,null);
}

function shuffleString($str){
    echo str_shuffle($str);
}
?>

