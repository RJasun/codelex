<?php declare(strict_types=1);
//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

function checkFifteen ($firstNum, $secondNum) {

        if ($firstNum == 15 || $secondNum == 15) {
            return true;
        }
    if ($firstNum + $secondNum == 15 || $firstNum - $secondNum == 15) {
        return true;
    }
}

$firstNum = readline ("Enter the first integer: ");
$secondNum = readline ("Enter the second integer: ");

if (checkFifteen($firstNum, $secondNum)) {
    echo "true";
}
