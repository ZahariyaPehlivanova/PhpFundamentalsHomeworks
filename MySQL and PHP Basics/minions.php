<?php
$db = new \PDO(
    "mysql:host=localhost;dbname=minions;charset=utf8",
    "root",
    "",
    [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
);

//$stmt = $db->query("SELECT name FROM minions");

$stmt = $db->prepare("SELECT minions.name,towns.name as town 
FROM minions
INNER JOIN towns ON towns.id = minions.town_id
WHERE minions.id = ?");
$stmt->execute([1]);

print_r($stmt->fetchAll(PDO::FETCH_ASSOC));