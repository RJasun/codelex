<?php
class Piglet {
    private int $totalPoints = 0;
    private bool $gameOver = false;

    public function playGame() {
        echo "Welcome to Piglet game, press 1 to roll the dice, or press 2 to collect points and end the game.\n";

        while (!$this->gameOver) {
            $userInput = readline("Your choice: ");

            switch ($userInput) {
                case '1':
                    $dieRoll = rand(1, 6);
                    echo "You rolled a $dieRoll.\n";

                    if ($dieRoll === 1) {
                        echo "You rolled a 1. You get 0 points, and the game ends.\n";
                        $this->gameOver = true;
                    } else {
                        $this->totalPoints += $dieRoll;
                        echo "You now have {$this->totalPoints} points.\n";
                    }
                    break;

                case '2':
                    echo "Game over. You collected {$this->totalPoints} points.\n";
                    $this->gameOver = true;
                    break;

                default:
                    echo "Invalid choice. Please choose 1 to roll the dice or 2 to collect the points.\n";
            }
        }
    }
}

$game = new Piglet();
$game->playGame();