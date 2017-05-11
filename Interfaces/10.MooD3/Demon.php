<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 09/03/2017
 * Time: 16:51
 */

namespace MooD;


class Demon extends Character
{
    public function generatePassword()
    {
        $len = strlen($this->username);
        return $len * 217;
    }
}