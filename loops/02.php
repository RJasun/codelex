<?php

function toPowerOf($baseNumber, $exponent) {
    $result = $baseNumber;
    for ($i = 0; $i < $exponent; $i++) {
    $result *= $baseNumber;
    }
    return $result;
}
$baseNumber = 2;
$exponent = 3;
$result = toPowerOf($baseNumber, $exponent);
echo "$baseNumber to power of $exponent is $result";
