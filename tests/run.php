<?php

declare(strict_types=1);

require __DIR__ . '/../src/ListNode.php';
require __DIR__ . '/../src/Solution.php';

use Homework\ListNode;
use Homework\Solution;

function linked(array $values): ?ListNode
{
    $head = null;
    for ($index = count($values) - 1; $index >= 0; $index--) {
        $head = new ListNode($values[$index], $head);
    }
    return $head;
}

function values(?ListNode $node): array
{
    $result = [];
    while ($node !== null) {
        $result[] = $node->value;
        $node = $node->next;
    }
    return $result;
}

$solution = new Solution();
$cases = [
    [[1, 2, 4], [1, 3, 4], [1, 1, 2, 3, 4, 4]],
    [[], [], []],
    [[], [0], [0]],
    [[-3, 5], [-4, 8], [-4, -3, 5, 8]],
];

foreach ($cases as [$left, $right, $expected]) {
    $actual = values($solution->mergeTwoLists(linked($left), linked($right)));
    if ($actual !== $expected) {
        throw new RuntimeException('Unexpected result: ' . json_encode($actual));
    }
}

echo "All tests passed\n";
