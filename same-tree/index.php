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
    public function isSameTree(?TreeNode $p, ?TreeNode $q)
    {
        if (is_null($p) && is_null($q))
            return true;

        if (is_null($p) || is_null($q) || $p->val !== $q->val)
            return false;

        return $this->isSameTree($p->left, $q->left) &&
            $this->isSameTree($p->right, $q->right);
    }
}
