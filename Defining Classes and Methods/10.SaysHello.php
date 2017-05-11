<?php
class Person{
    private $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello():string{
        return $this->name . ' says "Hello"!';
    }
}

$name = trim(fgets(STDIN));
$person = new Person($name);

echo $person->sayHello();