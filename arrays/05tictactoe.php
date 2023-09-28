<?php
$playerOne = 'X';
$playerTwo = 'O';

$board = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' '],
];

$winningCombinations = [
    [[0, 0], [0, 1], [0, 2]],
    [[1, 0], [1, 1], [1, 2]],
    [[2, 0], [2, 1], [2, 2]],
    [[0, 0], [1, 0], [2, 0]],
    [[0, 1], [1, 1], [2, 1]],
    [[0, 2], [1, 2], [2, 2]],
    [[0, 0], [1, 1], [2, 2]],
    [[2, 0], [1, 1], [0, 2]],
];

function display_board($board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]}\n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]}\n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]}\n";
}

function check_winner($board, $player, $winningCombinations)
{
    foreach ($winningCombinations as $combination) {
        $win = true;
        foreach ($combination as $coord) {
            [$row, $col] = $coord;
            if ($board[$row][$col] !== $player) {
                $win = false;
                break;
            }
        }
        if ($win) {
            return true;
        }
    }

    return false;
}

$player = $playerOne;
$moves = 0;

while ($moves < 9) {
    display_board($board);

    echo "$player, choose your location (row, column): ";
    $input = readline();
    list($row, $col) = explode(' ', $input);

    if ($row >= 0 && $row <= 2 && $col >= 0 && $col <= 2) {
        if ($board[$row][$col] === ' ') {
            $board[$row][$col] = $player;
            $moves++;

            if (check_winner($board, $player, $winningCombinations)) {
                display_board($board);
                echo "'$player' wins!\n";
                break;
            }

            $player = ($player === $playerOne) ? $playerTwo : $playerOne;
        } else {
            echo "The location is taken, choose a different spot.\n";
        }
    } else {
        echo "Invalid input. Enter row and column between 0 and 2.\n";
    }
}

if ($moves === 9) {
    display_board($board);
    echo "The game is a tie.\n";
}