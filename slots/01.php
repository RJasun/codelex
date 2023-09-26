<?php

$maxRows = 3;
$maxColumns = 4;

$a = 'A';
$b = 'B';
$c = 'C';
$d = 'D';
$x = 'X';
$y = 'Y';

$points = [
$a => 1,
$b => 1,
$c => 2,
$d => 2,
$x => 5,
$y => 5,
];

$elements = ['A', 'A', 'A', 'B', 'B', 'B', 'C', 'C', 'D', 'D', 'X', 'Y'];

$board = [
[],
[],
[]
];

$winningCombinations = [
[0, 1, 2, 3],
[4, 5, 6, 7],
[8, 9, 10, 11],
[0, 1, 2],
[4, 5, 6],
[8, 9, 10]
];



for ($row = 0; $row < $maxRows; $row++) {
for ($column = 0; $column < $maxColumns; $column++) {
$board[$row][$column] = $elements[array_rand($elements)];
}
}

function displayBoard(array $board)
{
foreach ($board as $row) {
foreach ($row as $column => $element) {
echo "[$element]";
}
echo PHP_EOL;
}
}

displayBoard($board);