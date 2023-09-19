<?php declare(strict_types=1);

//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

$result = 1;

for ($i = 1; $i <= 10; $i++) {
    $result *= $i;
}

echo "The factorial of 10 is $result";