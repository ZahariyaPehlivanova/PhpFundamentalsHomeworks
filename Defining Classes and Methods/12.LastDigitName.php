<?php
class Number{
    private $num;
    public function __construct(string $num)
    {
        $this->num = $num;
    }
    public function getEnglishName() : string{
        $lastDigit = $this->num[strlen($this->num) - 1];
        switch ($lastDigit){
            case '0':return 'zero';
            case '1':return 'one';
            case '2':return 'two';
            case '3':return 'three';
            case '4':return 'four';
            case '5':return 'five';
            case '6':return 'six';
            case '7':return 'seven';
            case '8':return 'eight';
            case '9':return 'nine';
        }
    }
}

$num = trim(fgets(STDIN));
$num = new Number($num);

echo $num->getEnglishName();