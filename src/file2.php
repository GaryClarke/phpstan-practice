<?php

declare(strict_types=1);

// Type mismatch: Function expects an integer, but gets a string
function addNumbers(int $a, int $b): int
{
    return $a + $b;
}

echo addNumbers("5", 6);
