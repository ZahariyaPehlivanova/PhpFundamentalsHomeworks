<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 08/03/2017
 * Time: 10:40
 */

namespace WildFarm;


abstract class Mammal extends Animal
{
    private $region;

    public function __construct($type, $name, $weight,string $region)
    {
        parent::__construct($type, $name, $weight, $region);
        $this->region = $region;
    }
}