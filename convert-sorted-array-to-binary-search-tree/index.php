<?php

class TreeNode
{
    public function __construct(
        public int $val = 0,
        public ?TreeNode $left = null,
        public ?TreeNode $right = null
    ) {
    }
}

class Solution
{
    /**
     * @param int[] $nums
     */
    function sortedArrayToBST(array $nums): ?TreeNode
    {
        $count = count($nums);

        if ($count === 0) {
            return null;
        }

        $mid = intdiv($count, 2);

        return new TreeNode(
            $nums[$mid],
            $this->sortedArrayToBST(array_slice($nums, 0, $mid)),
            $this->sortedArrayToBST(array_slice($nums, $mid + 1))
        );
    }
}