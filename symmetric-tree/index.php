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
    function isSymmetric(?TreeNode $root): bool
    {
        if (is_null($root)) {
            return false;
        }

        return $this->compare($root->right, $root->left);
    }

    private function compare(?TreeNode $p, ?TreeNode $q): bool
    {
        if (is_null($p) && is_null($q)) {
            return true;
        }
        if (is_null($p) || is_null($q) || $p->val !== $q->val) {
            return false;
        }
        return $this->compare($p->left, $q->right) && $this->compare($p->right, $q->left);
    }
}
