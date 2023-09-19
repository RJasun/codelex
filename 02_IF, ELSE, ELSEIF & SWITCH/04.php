<?php

//Exercise 4
//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.

$number = 18;
$x = 10;
$y = 20;

if ($number > $x && $number < $y && $number % 2 == 0) {
    echo "The value ($number) is greater than $x, less than $y, and is an even number.";
} else {
    echo "The value does not meet all three conditions.";
}