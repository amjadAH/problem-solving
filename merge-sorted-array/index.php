<?php

class Solution
{
    /**
     * @param array<int,int> $nums1
     * @param array<int,int> $nums2
     */
    function merge(array &$nums1, int $m, array &$nums2, int $n): void
    {
        $i = $m - 1; $j = $n - 1; $k = $m + $n - 1;

        while ($j >= 0) {
            if ($i >= 0 && $nums1[$i] > $nums2[$j]) {
                $nums1[$k--] = $nums1[$i--];
            } else {
                $nums1[$k--] = $nums2[$j--];
            }
        }
    }
}
