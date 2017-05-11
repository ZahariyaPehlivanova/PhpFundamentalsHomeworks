<?php

class Pokemon{
    private $name;
    private $pokemonElement;
    private $health;

    public function __construct(string $name,string $element,float $health)
    {
        $this->name = $name;
        $this->pokemonElement = $element;
        $this->health = $health;
    }

    public function getElement()
    {
        return $this->pokemonElement;
    }

    public function loseHealth(){
        $this->health -= 10;
    }

    public function dead() : bool{
        if($this->health <= 0){
            return true;
        }else{
            return false;
        }
    }

    public function __toString()
    {
        return $this->name .' ' . $this->pokemonElement . ' ' . $this->health;
    }
}