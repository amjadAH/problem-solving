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
    public function inorderTraversal(?TreeNode $root): array
    {
        $result = [];
        $this->getNode($root, $result);

        return $result;
    }

    private function getNode(?TreeNode $node, array &$result): void
    {
        if ($node) {
            $this->getNode($node->left, $result);
            $result[] = $node->val;
            $this->getNode($node->right, $result);
        }
    }
}
