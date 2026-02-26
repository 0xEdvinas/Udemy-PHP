<?php

$test = function () {
    echo "Hello, World!";
};

$test();

function someFn() {
    $tmp = 0;
    $lamba = function() {
        $count = 1337;
        echo "Count: $count\n";
    };

    $lamba();
    echo 'We done here';
}

someFn();