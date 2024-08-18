<?php

class Solution
{
    private const PARENTHESES = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];

    function isValid(string $s): bool
    {
        $s = str_split($s);
        $arr = [];
        foreach ($s as $char) {
            if (isset(self::PARENTHESES[$char])) {
                $arr[] = $char;
                continue;
            }

            $poppedValue = array_pop($arr);
            if (self::PARENTHESES[$poppedValue] != $char)
                return false;
        }
        return count($arr) == 0;
    }
}
