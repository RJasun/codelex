<?php

$elements = [
    'rock' => ['scissors', 'lizard'],
    'paper' => ['rock', 'spock'],
    'scissors' => ['paper', 'lizard'],
    'lizard' => ['spock', 'paper'],
    'spock' => ['scissors', 'rock'],
];

echo "Available elements: " . implode(', ', array_keys($elements)) . "\n";
$userSelection = readline('Choose your weapon: ');

if (in_array(strtolower($userSelection), $elements) === false)
{
    echo 'Invalid element selected';
    exit;
}

$computerSelection = array_rand($elements);

echo "You selected: $userSelection\n";
echo "Computer selected: $computerSelection\n";

if ($userSelection === $computerSelection) {
    echo 'Its a tie';
} elseif (in_array($computerSelection, $elements[$userSelection])) {
    echo 'You win!';
} else {
    echo 'Computer wins!';
}