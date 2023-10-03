<?php
class RollTwoDice {
    public function rollUntilDesiredSum($desiredSum) {
        $rollCount = 0;

        echo "Desired sum: $desiredSum\n";

        while (true) {
            $die1 = rand(1, 6);
            $die2 = rand(1, 6);
            $rollCount++;

            echo "$die1 and $die2 = " . ($die1 + $die2) . "\n";

            if ($die1 + $die2 == $desiredSum) {
                break;
            }
        }

        echo "It took $rollCount rolls to achieve the desired sum of $desiredSum.\n";
    }
}

$desiredSum = readline("Enter the desired sum: ");
$roller = new RollTwoDice();
$roller->rollUntilDesiredSum($desiredSum);