<?php declare(strict_types=1);


//Write a program to produce the sum of 1, 2, 3, ..., to 100. Store 1 and 100 in variables lower bound and upper bound,
// so that we can change their values easily. Also compute and display the average. The output shall look like:
//
//The sum of 1 to 100 is 5050
//The average is 50.5

$lowerBound = 1;
$upperBound = 100;

$sumOfNumbers = array_sum(range($lowerBound, $upperBound));

$average = $sumOfNumbers / ($upperBound - $lowerBound + 1);

echo "The sum of $lowerBound to $upperBound is $sumOfNumbers" . PHP_EOL;

echo "The average is $average";
