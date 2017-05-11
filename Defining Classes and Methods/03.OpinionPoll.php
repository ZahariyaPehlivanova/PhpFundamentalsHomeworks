<?php
require_once "01.Person.php";

$n = trim(intval(fgets(STDIN)));
$people = [];
while ($n--){
    list($name, $age) = explode(' ',fgets(STDIN));
    $age = intval($age);
    if($age > 30){
        $people[$name] = $age;
    }
}
ksort($people);

foreach ($people as $key => $value){

    echo $key . " - " . $value . PHP_EOL;
}
//class Person{
//    private $name;
//    private $age;
//    public function __construct(string $name,int $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//    public function __toString()
//    {
//        return $this->name . " " . $this->age;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//}

