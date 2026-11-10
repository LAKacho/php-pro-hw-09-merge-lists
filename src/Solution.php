<?php

declare(strict_types=1);

namespace Homework;

final class Solution
{
    public function mergeTwoLists(?ListNode $left, ?ListNode $right): ?ListNode
    {
        $dummy = new ListNode(0);
        $tail = $dummy;

        while ($left !== null && $right !== null) {
            if ($left->value <= $right->value) {
                $tail->next = $left;
                $left = $left->next;
            } else {
                $tail->next = $right;
                $right = $right->next;
            }
            $tail = $tail->next;
        }

        $tail->next = $left ?? $right;

        return $dummy->next;
    }
}
