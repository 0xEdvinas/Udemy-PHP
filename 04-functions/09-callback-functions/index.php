<?php

$numbers = [1, 2, 3, 4, 5];

// applies callback function to each element
$squareNum = array_map(function($number) {
    return $number * $number;
}, $numbers);


// print_r($squareNum);


function applyCallback($callback, $value) {
    return $callback($value);
}

$double = function($num) {
    return $num * 2;
};


echo applyCallback($double, 5);