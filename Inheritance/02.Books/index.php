<?php
require_once "Book.php";
require_once "GoldenEditionBook.php";

$author = trim(fgets(STDIN));
$title = trim(fgets(STDIN));
$price = intval(trim(fgets(STDIN)));
$type = trim(fgets(STDIN));

try{
    $book = null;
    if($type === 'STANDARD'){
        $book = new Book($author,$title,$price);
    }else if($type === 'GOLD'){
        $book = new GoldenEditionBook($author,$title,$price);
    }else {
        throw new Exception('Type is not valid!');
    }
    echo 'OK' . PHP_EOL;
    echo $book->getPrice();
}catch (Exception $ex) {
    echo $ex->getMessage();
}