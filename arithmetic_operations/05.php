<?php declare(strict_types=1);

$randomNumber = rand(1, 100);

$guessLimit = 3;
$guessCount = 0;

while ($guessCount < $guessLimit) {
    $guess = (int)readline ("Guess the number between 1 and 100: ");
    $guessCount ++;

    if ($guess == $randomNumber) {
        echo "You guessed the number, yes it was $randomNumber!!!" . PHP_EOL;
        break;
    }
    if ($guess > $randomNumber) {
        echo "Your guess is too high" . PHP_EOL;
    }
    if ($guess < $randomNumber) {
        echo "Your guess is too low" . PHP_EOL;
    }
}

if ($guessCount == $guessLimit) {
    echo "You have ran out of guesses, the correct number was $randomNumber" . PHP_EOL;
}