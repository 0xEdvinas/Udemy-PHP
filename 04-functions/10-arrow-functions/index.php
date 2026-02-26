<?php

$add = fn ($a, $b) =>  $a + $b;

// echo $add(2, 3);


$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(fn ($number) => $number ** 2, $numbers);

print_r($squaredNumbers);