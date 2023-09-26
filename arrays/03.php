<?php declare(strict_types=1);

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";
$userInput = readline();

$found = false;

foreach ($numbers as $number) {
    if ($number == $userInput) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "The value $userInput was found in the array.";
} else {
    echo "The value $userInput was not found in the array.";
}