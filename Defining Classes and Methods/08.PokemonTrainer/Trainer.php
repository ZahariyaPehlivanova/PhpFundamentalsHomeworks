<?php

class Trainer{
    private $name;
    private $badges = 0;
    private $pokemons = [];

    public function __construct(string $name,int $badges = 0)
    {
        $this->name = $name;
        $this->badges = $badges;
    }
    public function addPokemon(Pokemon $pokemon){
        $this->pokemons[] = $pokemon;
    }

    public function getPokemons()
    {
        return $this->pokemons;
    }

    public function containsElement(string $el) : bool{
        foreach ($this->pokemons as $name => $pokemon) {
            if ($pokemon->getElement() == $el) {
                return true;
            }
        }
        return false;
    }

    public function increaseBadges(){
        $this->badges+=1;
    }

    public function reduceHealth(){
        foreach ($this->pokemons as $name => $pokemon) {
            $pokemon->loseHealth();
            if($pokemon->dead()){
                unset($this->pokemons,$pokemon);
            }
        }
    }

    public function getBadges()
    {
        return $this->badges;
    }

    public function getPokemonsCount()
    {
        return count($this->pokemons);
    }

    public function __toString()
    {
        return $this->name .' ' . $this->getBadges() . ' '. $this->getPokemonsCount();
    }
}