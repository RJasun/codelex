<?php

//Exercise 6
//Create a variable $plateNumber that stores your car plate number.
//Create a switch statement that prints out that its your car in case of your number.

$plateNumber = "KA909"; // Replace with your actual car plate number

switch ($plateNumber) {
    case "KA909":
        echo "This is your car!";
        break;
    default:
        echo "This is not your car.";
}
