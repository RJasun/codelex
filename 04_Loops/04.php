<?php

//Create a non associative array with integers and print out only integers that divides by 3 without any left.
$numbers = [3, 5, 9, 10, 15, 20, 21, 26, 27, 30];

foreach ($numbers as $number) {
    if ($number % 3 == 0) {
        echo $number . " ";
    }
}