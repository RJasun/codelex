<?php

//Create an array with integers (up to 10) and print them out using for loop.
$integers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$length = count($integers);

for ($i = 0; $i < $length; $i++) {
    echo $integers[$i] . " ";
}

