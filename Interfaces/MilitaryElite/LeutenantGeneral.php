<?php
class LeutenantGeneral extends PrivateSoldier
{
    private $privates = [];
    public function __construct($id, $name, $lastName, $salary)
    {
        parent::__construct($id, $name, $lastName, $salary);
    }
}