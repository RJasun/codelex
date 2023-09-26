<?php declare(strict_types=1);
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

echo "Original numeric array: " . PHP_EOL;
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . ' ';
    if (($i + 1) % 5 == 0) {
        echo PHP_EOL;
    }
}

sort($numbers);
echo PHP_EOL;
echo "Sorted numeric array: " . PHP_EOL;
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . ' ';
    if (($i + 1) % 5 == 0) {
        echo PHP_EOL;
    }
}

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];
echo PHP_EOL;
echo "Original string array: " . PHP_EOL;
$lastIndex = count($words) - 1;
foreach ($words as $index => $word) {
    echo $word;
    if ($index !== $lastIndex) {
        echo ' ' . PHP_EOL;
    }
}

sort($words);
echo PHP_EOL;
echo "Sorted string array: " . PHP_EOL;
foreach ($words as $index => $word) {
    echo $word;
    if ($index !== $lastIndex) {
        echo ' ' . PHP_EOL;
    }
}