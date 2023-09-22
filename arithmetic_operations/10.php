<?php declare(strict_types=1);

$Pi = M_PI;

function circleArea($Pi, $radius)
{
    if ($radius < 0) {
        throw new InvalidArgumentException("Radius cannot be negative.");
    }
    return $Pi * $radius ** 2;
}

function rectangleArea($length, $width)
{
    if ($length < 0 || $width < 0) {
        throw new InvalidArgumentException("Length and width cannot be negative.");
    }
    return $length * $width;
}

function triangleArea($base, $height): float
{
    if ($base < 0 || $height < 0) {
        throw new InvalidArgumentException("Base and height cannot be negative.");
    }
    return $base * $height * 0.5;
}

try {
    echo "Select a shape:\n";
    echo "1. Circle\n";
    echo "2. Rectangle\n";
    echo "3. Triangle\n";
    echo "4. Quit\n";

    $choice = readline("Enter your choice (1-4): ");

    if ($choice < 1 || $choice > 4) {
        throw new InvalidArgumentException("Invalid choice. Please enter a number between 1 and 4.");
    }

    if ($choice == 4) {
        exit("Goodbye!\n");
    }

    switch ($choice) {
        case 1:
            $radius = readline("Enter the radius for the circle: ");
            $circleArea = circleArea($Pi, (float) $radius);
            echo "Circle Area: $circleArea\n";
            break;
        case 2:
            $length = readline("Enter the length for the rectangle: ");
            $width = readline("Enter the width for the rectangle: ");
            $rectangleArea = rectangleArea((float) $length, (float) $width);
            echo "Rectangle Area: $rectangleArea\n";
            break;
        case 3:
            $base = readline("Enter the base for the triangle: ");
            $height = readline("Enter the height for the triangle: ");
            $triangleArea = triangleArea((float) $base, (float) $height);
            echo "Triangle Area: $triangleArea\n";
            break;
    }
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}