<?php

class Product{
    private $name;
    private $cost;
    public function __construct(string $name,float $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
    }
    public function getName(){
        return $this->name;
    }
    private function setName($name)
    {
        if(strlen($name) == 0){
            throw new Exception('Name cannot be empty');
        }
        $this->name = $name;
    }

    public function getCost(){
        return $this->cost;
    }
    private function setCost($cost)
    {
        if($cost < 0){
            throw new Exception('Money cannot be negative');
        }
        $this->cost = $cost;
    }
}