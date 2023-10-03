<?php

$firstWord = readline("Enter first word: ");
$secondWord = readline("Enter second word: ");

$dot = ".";
$totalLength = strlen($firstWord) + strlen($secondWord);

echo $firstWord;

while ($totalLength < 30) {
    echo $dot;
    $totalLength++;
}

echo $secondWord;