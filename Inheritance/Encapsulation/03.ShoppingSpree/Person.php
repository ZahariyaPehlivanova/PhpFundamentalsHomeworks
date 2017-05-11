<?php

class Person{

    private $name;
    private $money;
    private $products = [];
    public function __construct(string $name,float $money)
    {
        $this->setName($name);
        $this->setMoney($money);
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

    public function getMoney(){
        return $this->money;
    }

    private function setMoney($money)
    {
        if($money < 0){
            throw new Exception('Money cannot be negative');
        }
        $this->money = $money;
    }

    public function buyProduct(Product $product){
        if($product->getCost() > $this->money){
            echo "{$this->name} can't afford {$product->getName()}\n";
        }else {
            echo "{$this->name} bought {$product->getName()}\n";
            $this->products[] = $product;
            $this->money -= $product->getCost();
        }
    }

    public function getProductsName(): array{
        $result = [];
        foreach ($this->products as $product){
            $result[] = $product->getName();
        }
        return $result;
    }

    public function __toString()
    {   $result = "";
        $products = $this->getProductsName();
        count($products) > 0 ?  $result = implode(",", $products) : $result = "Nothing bought";
        return "{$this->name} - {$result}\n";
    }
}