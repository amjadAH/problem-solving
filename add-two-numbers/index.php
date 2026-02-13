<?php

class Solution
{
    public function addTwoNumbers(ListNode $firstList, ListNode $secondList): ListNode
    {
        $dummyHead = new ListNode(0);
        $currentNode = $dummyHead;
        $carryOver = 0;

        while ($firstList !== null || $secondList !== null || $carryOver > 0) {
            $firstValue = $firstList ? $firstList->val : 0;
            $secondValue = $secondList ? $secondList->val : 0;

            $digitSum = $firstValue + $secondValue + $carryOver;
            $carryOver = intdiv($digitSum, 10);
            $digitValue = $digitSum % 10;

            $currentNode->next = new ListNode($digitValue);
            $currentNode = $currentNode->next;

            if ($firstList)
                $firstList = $firstList->next;
            if ($secondList)
                $secondList = $secondList->next;
        }

        return $dummyHead->next;
    }
}