<?php declare(strict_types=1);

$numbers = [20, 30, 25, 35, -16, 60, -100];
$average = array_sum($numbers) / count($numbers);
echo "Average sum of numbers is " . round($average);
