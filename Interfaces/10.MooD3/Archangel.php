<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 09/03/2017
 * Time: 16:51
 */

namespace MooD;


class Archangel extends Character
{
    public function generatePassword()
    {
        return strrev($this->username) . (strlen($this->username) * 21);
    }
}
