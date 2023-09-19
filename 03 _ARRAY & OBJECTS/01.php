<?php

//Exercise 1
//Create a non-associative array with 3 integer values and display the total sum of them.

$numbers = [1, 2, 3];
$totalSum = array_sum($numbers);

echo "Total sum of numbers is" . ' ' . $totalSum;
