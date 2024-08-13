<?php

class Solution
{
    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome(int $x): bool
    {
        if ($x < 0) {
            return false;
        }
        $x = str_split($x);
        $count = count($x);
        $limit = $count % 2 == 0 ? $count / 2 : $count / 2 + 1;
        for ($i = 0; $i < $limit; $i++) {
            if ($x[$i] != $x[$count - $i - 1]) {
                return false;
            }
        }

        return true;
    }
}
