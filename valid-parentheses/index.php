<?php

/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution
{
    private const PARENTHESES = [
        '(' => ')',
        '[' => ']',
        '{' => '}',
    ];
    /**
     * @param string $s
     * @return bool
     */
    function isValid($s)
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
// @lc code=end

var_dump((new Solution)->isValid('['));