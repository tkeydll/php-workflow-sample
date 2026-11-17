<?php
declare(strict_types=1);

require __DIR__ . '/../add.php';

$testCases = [
    [2, 3, 5],
    [-4, 7, 3],
    [0, 0, 0],
];

foreach ($testCases as [$left, $right, $expected]) {
    $actual = add($left, $right);
    if ($actual !== $expected) {
        throw new RuntimeException(
            sprintf('add(%d, %d): expected %d, got %d', $left, $right, $expected, $actual)
        );
    }
}

echo sprintf("Passed %d addition tests.\n", count($testCases));
