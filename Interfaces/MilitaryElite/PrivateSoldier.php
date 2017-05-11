<?php

class PrivateSoldier extends Soldier
{
    private $salary;
    public function __construct($id, $name, $lastName,$salary)
    {
        parent::__construct($id, $name, $lastName);
        $this->salary = $salary;
    }
}