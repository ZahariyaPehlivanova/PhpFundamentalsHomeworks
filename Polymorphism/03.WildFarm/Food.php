<?php

namespace WildFarm;

abstract class Food
{
    private $quantity;

    public function __construct(float $quantity)
    {
        $this->quantity = $quantity;
    }

    public function getQuantity() : float {
        return $this->quantity;
    }

    public function getClassName(): string
    {
        return basename(get_class($this));
    }
}