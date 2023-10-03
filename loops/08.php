<?php

class NumberSquare {
    public function numbersInSquare() {
       $min = (int)readline("Enter min number: ");
        $max = (int)readline("Enter max number: ");

        if ($min > $max) {
            echo "Min should be equal or bigger than Max." . PHP_EOL;
        } else {
            for ($i = 0; $i <= $max - $min; $i++) {
                for ($j = 0; $j <= $max - $min; $j++) {
                    $currentNumber = $min + $i + $j;
                    if ($currentNumber > $max) {
                        $currentNumber = $min +$i + $j - ($max - $min + 1);
                    }
                    echo $currentNumber;
                }
                echo PHP_EOL;
            }
        }
    }
}

$square = new NumberSquare();
$square->numbersInSquare();