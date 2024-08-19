<?php

/*
 * @lc app=leetcode id=28 lang=php
 *
 * [28] Find the Index of the First Occurrence in a String
 */

// @lc code=start
class Solution
{
    /**
     * @param string $haystack
     * @param string $needle
     * @return int
     */
    function strStr(string $haystack, string $needle): int
    {
        if ($haystack == $needle) {
            return 0;
        }
        for ($i = 0; $i < strlen($haystack) - strlen($needle) + 1; $i++) {
            $subStr = substr($haystack, $i, strlen($needle));
            if ($subStr == $needle)
                return $i;
        }
        return -1;
    }
}
// @lc code=end
