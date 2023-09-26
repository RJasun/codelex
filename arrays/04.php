<?php
$array1 = [];

for ($i = 0; $i < 10; $i++) {
    $randomNumber = rand(1, 100);
    $array1[] = $randomNumber;
}

$array2 = [];

for ($i = 0; $i < count($array1); $i++) {
    $array2[] = $array1[$i];
}

$array1[count($array1) - 1] = -7;

echo "Array 1: ";
for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] . ' ';
}
echo PHP_EOL;

echo "Array 2: ";
for ($i = 0; $i < count($array2); $i++) {
    echo $array2[$i] . ' ';
}
echo PHP_EOL;
