<?php declare(strict_types=1);

function multiplyBase(int $base, int $multiplier) {
    $result = $base * $multiplier;

    echo $result;
}

multiplyBase(3, 6);