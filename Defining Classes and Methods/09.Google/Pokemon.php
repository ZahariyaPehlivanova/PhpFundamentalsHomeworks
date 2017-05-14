<?php
namespace Google;


class Pokemon
{
    private $name;
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function __toString()
    {
        return "{$this->name} {$this->type}";
    }
}