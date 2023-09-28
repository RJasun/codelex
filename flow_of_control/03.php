<?php
$number = readline("Enter a number and if it will be positive, I will tell u how many digits it has: ");
if ($number > 0) {
function countDigits($myNumber): int
{
    $myNumber = (int)$myNumber;
    $count = 0;

    while($myNumber != 0){
        $myNumber = (int)($myNumber / 10);
        $count++;
    }
    return $count;
    }

    if (countDigits($number) === 1) {
    echo "The number U wrote contains: " . countDigits($number) . " Digit";
}
        if (countDigits($number) > 1) {
            echo "The number U wrote contains: " . countDigits($number) . " Digits";
        }
            }

    if ($number < 0) {
        echo "The number is negative, I will not count the digits";
    }