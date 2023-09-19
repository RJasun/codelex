<?php declare(strict_types=1);

//Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
// or “Even Number” otherwise. The program shall always print “bye!” before exiting.

function checkOddEven($varNum) {
    if ($varNum % 2 == 0) {
        echo "Even number" . PHP_EOL;
    } else {
echo "Odd number" . PHP_EOL;
    }
}

$varNum = readline("Enter a number: ");
checkOddEven((int)$varNum);
