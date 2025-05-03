<?php

class Solution
{
    public function mySqrt(int $x): int
    {
        return $this->getClosestRoot($x, 10);
    }

    private function getClosestRoot(int $x, float $n): int
    {
        $sqr = $n + ($x - $n * $n) / (2 * $n);

        if (abs($sqr * $sqr - $x) > 1) {
            return $this->getClosestRoot($x, $sqr);
        }

        return (int) $sqr;
    }
}