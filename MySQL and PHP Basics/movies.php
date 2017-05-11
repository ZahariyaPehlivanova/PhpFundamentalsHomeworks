<?php
$db = new \PDO(
    "mysql:host=localhost;dbname=movies;charset=utf8",
    "root",
    "",
    [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
);

//$stmt = $db->query("SELECT * FROM movies");
//$stmt = $db->query("SELECT * FROM movies WHERE title = 'zaglavie'");



$stmt = $db->prepare("SELECT movies.title, genres.genre_name  
FROM movies 
INNER JOIN genres ON genres.id = movies.genre_id 
WHERE movies.id = ?");
$stmt->execute([1]);

print_r($stmt->fetchAll(PDO::FETCH_ASSOC));