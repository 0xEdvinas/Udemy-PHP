<?php

// will make PHP throw a TypeError if the types do not match
declare(strict_types=1);

function add(int $a, int $b): int
{
    return $a + $b;
}

echo add(5, 1);