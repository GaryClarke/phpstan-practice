<?php

declare(strict_types=1);

/**
 * @param int[] $numbers
 * @return int
 */
function sumNumbers(array $numbers): int
{
    // Incorrect implementation: return type should be int, but returns array
    return $numbers;
}

echo sumNumbers([1, 2, 3]);
