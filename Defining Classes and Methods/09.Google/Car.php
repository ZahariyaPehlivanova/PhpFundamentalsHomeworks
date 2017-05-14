<?php

namespace Google;


class Car
{
    private $model;
    private $speed;

    public function __construct($model, $speed)
    {
        $this->model = $model;
        $this->speed = $speed;
    }

    public function __toString()
    {
        return "{$this->model} {$this->speed}";
    }
}