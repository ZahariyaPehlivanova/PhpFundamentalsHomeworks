<?php

namespace MassEffect\Models\Enhancements;


use MassEffect\Models\Ships\ShipInterface;

interface EnhancementInterface
{
    public function enhance(ShipInterface $ship);
}