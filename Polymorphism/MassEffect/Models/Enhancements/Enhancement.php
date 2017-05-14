<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 14/05/2017
 * Time: 17:09
 */

namespace MassEffect\Models\Enhancements;


use MassEffect\Models\Ships\ShipInterface;

abstract class Enhancement implements EnhancementInterface
{
    public abstract function enhance(ShipInterface $ship);
}