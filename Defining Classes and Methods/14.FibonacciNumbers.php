<?php
class Fibonacci
{
    private $fibSeq = [0, 1];
    public function __construct(int $endPos)
    {
        $this->generate($endPos);
    }
    public function getNumbersInRange(int $startPos, int $endPos)
    {
        return array_slice($this->fibSeq, $startPos, $endPos);
    }
    private function generate(int $endPos)
    {
        for ($i = 2; $i < $endPos; $i++) {
            $a = $this->fibSeq[$i - 2];
            $b = $this->fibSeq[$i - 1];
            $this->fibSeq[] = $a + $b;
        }
    }
}

$start = intval(trim(fgets(STDIN)));
$end = intval(trim(fgets(STDIN)));
$fib = new Fibonacci($end);
echo implode(", ", $fib->getNumbersInRange($start, $end));