<?php declare(strict_types=1);

//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
//Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).

$array = [3, 6, 9, 5.5, "hello"];

function doubleValue($value) {
    if (is_numeric($value)) {
        // Cast the value to float before multiplying
        return (float)$value * 2;
    }
    return $value; // Return as is for non-numeric values
}

$count = count($array);

for ($i = 0; $i < $count; $i++) {
    $originalValue = $array[$i];

    // Check if the value is numeric before printing
    if (is_numeric($originalValue)) {
        $doubledValue = doubleValue($originalValue);
        echo "Element $i: Original Value: $originalValue, Doubled Value: $doubledValue" . PHP_EOL;
    }
}
