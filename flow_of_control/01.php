<?php

$firstNumber = readline("Input the first number: ");
$secondNumber = readline("Input the second number: ");
$thirdNumber = readline("Input the third number: ");

if ($firstNumber >= $secondNumber && $firstNumber >= $thirdNumber) {
    echo "The biggest number is: $firstNumber";
}
if ($secondNumber >= $firstNumber && $secondNumber >= $thirdNumber) {
    echo "The biggest number is: $secondNumber";
}
if ($thirdNumber >= $firstNumber && $thirdNumber >= $secondNumber) {
    echo "The biggest number is: $thirdNumber";
}
