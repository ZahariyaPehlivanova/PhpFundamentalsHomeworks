<?php


namespace Google;


class Person
{
    private $name;
    private $company;
    private $car;
    private $parents = [];
    private $children = [];
    private $pokemons = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function getCar()
    {
        return $this->car;
    }


    public function setCar($car)
    {
        $this->car = $car;
    }

    public function getParents(): array
    {
        return $this->parents;
    }

   public function setParents(array $parents)
    {
        $this->parents = $parents;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function setChildren(array $children)
    {
        $this->children = $children;
    }

    public function getPokemons(): array
    {
        return $this->pokemons;
    }

    public function setPokemons(array $pokemons)
    {
        $this->pokemons = $pokemons;
    }

    public function addPokemon(Pokemon $pokemon){
        $this->pokemons[] = $pokemon;
    }

    public function addParent(Relative $parent){
        $this->parents[] = $parent;
    }

    public function addChild(Relative $child){
        $this->children[] = $child;
    }

    public function __toString()
    {

        $pokemons = implode("\n", $this->getPokemons());
        $parents =  implode("\n", $this->getParents());
        $children =  implode("\n", $this->getChildren());

        return "{$this->getName()}\nCompany:\n{$this->getCompany()}\nCar:\n{$this->getCar()}\nPokemon:\n{$pokemons}\nParents:\n{$parents}\nChildren:\n{$children}";
    }
}

