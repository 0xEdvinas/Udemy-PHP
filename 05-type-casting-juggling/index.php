<?php
 $num1 = 5;
 $num2 = 10;
 $num3 = '20';
 $fruit = 'apple';
 $bool1 = true;
 $bool2 = false;

 // Implicit conversion: PHP will automatically convert $num3 to an integer when performing the addition
 $result = $num1 + $num2; // int

 $result = $num1 + $num3; // string to int converted

 $result = $num3 + $num3; // string to int converted`

 $result = $num1 . $num2; // string concatenation

 //$result = $fruit + $num2; // Error

 $result = $num1 + $bool1; // true is converted to 1. 5 + 1 = 6

 $result = $num2 + $bool2; // false is converted to 0. 10 + 0 = 10

    // Explicit conversion (type casting)
    $result = (string) $num1; // int to string

    $result = (int) $num3;

    $result = (bool) $num1; // non-zero integer is true

 var_dump($result);
?>