<?php
class DecimalNumber{
    private $num;
    public function __construct(string $num)
    {
        $this->num = $num;
    }
    public function reverseNumber() : string{
        return strrev($this->num);
    }
}

$num = trim(fgets(STDIN));
$num = new DecimalNumber($num);

echo $num->reverseNumber();