<?php
/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution
{
    /**
     * @param string[] $arr
     * @return string
     */
    function longestCommonPrefix(array $arr): string
    {
        $result = str_split($arr[0]);
        for ($i = 1; $i < count($arr); $i++) {
            $splittedStr = str_split($arr[$i]);
            foreach ($splittedStr as $j => $char) {
                if (($result[$j] ?? '') != $char) {
                    $result = array_slice($result, 0, $j);
                    break;
                }
            }

            $result = array_slice($result, 0, count($splittedStr));
            if (empty($result)) {
                return '';
            }
        }
        return join($result);
    }
}
// @lc code=end

echo "loading...\n";
echo (new Solution)->longestCommonPrefix(["ab", "a"]);
