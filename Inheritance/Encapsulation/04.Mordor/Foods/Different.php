<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 12/05/2017
 * Time: 12:43
 */

namespace Mordor\Foods;


class Different extends Food
{
    private $differentPoints = -1;

    public function getPoints(){
        return $this->differentPoints;
    }
}