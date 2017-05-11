<?php
$db = new \PDO(
    "mysql:host=localhost;dbname=softuni;charset=utf8",
    "root",
    "",
    [\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
);


//$stmt = $db->prepare("SELECT * FROM addresses");
//$stmt = $db->prepare("SELECT name FROM departments ORDER BY departments.name ASC");
//$stmt = $db->prepare("SELECT first_name, last_name, job_title, salary FROM employees ORDER BY employees.salary DESC");
//$stmt = $db->prepare("SELECT name FROM towns ORDER BY towns.name ASC");

//$stmt = $db->prepare("UPDATE employees SET salary = (salary + (salary * 0.1))");

$stmt->execute();

print_r($stmt->fetchAll(PDO::FETCH_ASSOC));