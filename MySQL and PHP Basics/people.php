<?php
$db = new \PDO(
    "mysql:host=localhost;dbname=people;charset=utf8",
    "root",
    "",
    [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
);

//$stmt = $db->prepare("SELECT * FROM people");



$stmt->execute();

print_r($stmt->fetchAll(PDO::FETCH_ASSOC));