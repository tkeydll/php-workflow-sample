<?php
declare(strict_types=1);

require __DIR__ . '/../add.php';

$testCases = [
    [2, 3, 5],
    [-4, 7, 3],
    [0, 0, 0],
];

$total = count($testCases);
foreach ($testCases as $index => [$left, $right, $expected]) {
    $number = $index + 1;
    echo sprintf("[%d/%d] add(%d, %d) expected=%d ... ", $number, $total, $left, $right, $expected);
    $actual = add($left, $right);
    if ($actual !== $expected) {
        echo sprintf("FAIL (got %d)\n", $actual);
        throw new RuntimeException(
            sprintf('add(%d, %d): expected %d, got %d', $left, $right, $expected, $actual)
        );
    }
    echo sprintf("OK (got %d)\n", $actual);
}

echo sprintf("Passed %d addition tests.\n", count($testCases));
