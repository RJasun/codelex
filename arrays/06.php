<?php declare(strict_types=1);

$words = ["hangman", "programming", "computer", "internet", "language", "gamer", "keyboard", "developer"];

$wordToGuess = $words[array_rand($words)];
$wordLength = strlen($wordToGuess);

$maxTries = 7;
$incorrectGuesses = 0;

$guessedLetters = array_fill(0, $wordLength, '_');
$allGuesses = [];

while ($incorrectGuesses < $maxTries) {
    echo "Word: " . implode(" ", $guessedLetters) . "\n";
    echo "Incorrect Guesses: " . $incorrectGuesses . " of " . $maxTries . "\n";
    echo "All Guesses: " . implode(", ", $allGuesses) . "\n";
    echo "Enter a letter guess: ";
    $guess = strtolower(trim(fgets(STDIN)));

    $allGuesses[] = $guess;

    $correctGuess = false;
    for ($i = 0; $i < $wordLength; $i++) {
        if ($wordToGuess[$i] == $guess) {
            $guessedLetters[$i] = $guess;
            $correctGuess = true;
        }
    }

    if (!$correctGuess) {
        $incorrectGuesses++;
    }

    if (implode("", $guessedLetters) == $wordToGuess) {
        echo "Congratulations! You guessed the word: " . $wordToGuess . "\n";
        break;
    }
}

if ($incorrectGuesses >= $maxTries) {
    echo "You're out of guesses! The word was: " . $wordToGuess . "\n";
}
