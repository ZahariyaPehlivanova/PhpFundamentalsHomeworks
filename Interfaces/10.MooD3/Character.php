<?php
/**
 * Created by PhpStorm.
 * User: ZahariyaPC
 * Date: 09/03/2017
 * Time: 16:48
 */

namespace MooD;


abstract class Character
{
    protected $username;
    protected $password;
    protected $level;
    protected $specialPoints;

    public function __construct($username, $specialPoints, $level)
    {
        $this->username = $username;
        $this->specialPoints = $specialPoints;
        $this->level = $level;
    }
    public abstract function generatePassword();

    protected function getClassName(): string
    {
        return basename(get_class($this));
    }

    public function __toString()
    {
        $res = number_format($this->specialPoints * $this->level, 2, '.', '');
        return "\"{$this->username}\" | \"{$this->generatePassword()}\" -> {$this->getClassName()}\n{$res}";
    }
}
