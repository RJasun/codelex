<?php
/*$dayNumber = 4;

switch ($dayNumber) {
    case 0:
        echo "Sunday";
        break;
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    default:
        echo "Its not related to any day of the week";
}*/

$dayNumber = readline("Enter a number: ");

if ($dayNumber == 0) {
    echo "It's Sunday";
}
    if ($dayNumber == 1) {
    echo "It's Monday";
    }
        if ($dayNumber == 2) {
         echo "It's Tuesday";
        }
            if ($dayNumber == 3) {
                echo "It's Wednesday";
            }
                if ($dayNumber == 4) {
                    echo "It's Thursday";
                }
                    if ($dayNumber == 5) {
                            echo "It's Friday";
                        }
                            if ($dayNumber == 6) {
                                echo "It's Saturday";
                            }
                                if ($dayNumber < 0 || $dayNumber > 7) {
                                    echo "Its not a day of the week";
                                }

