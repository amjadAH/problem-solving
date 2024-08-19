<?php

class Solution
{
    /**
     * @param int[] $numbers
     * @param int $val
     * @return int
     */
    function removeElement(&$numbers, $val): int
    {
        $numbers = array_filter($numbers, fn($number) => $number != $val);

        return count($numbers);
    }
}
