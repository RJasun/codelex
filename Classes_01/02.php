<?php
declare(strict_types=1);

class Point {
    public int $x;
    public int $y;

    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(Point $pointOne, Point $pointTwo): void {
        $tempX = $pointOne->x;
        $pointOne->x = $pointTwo->x;
        $pointTwo->x = $tempX;

        $tempY = $pointOne->y;
        $pointOne->y = $pointTwo->y;
        $pointTwo->y = $tempY;
    }
}

$pointOne = new Point(5, 2);
$pointTwo = new Point(-3, 6);
$pointOne->swapPoints($pointOne, $pointTwo);

echo "(" . $pointOne->x . ", " . $pointOne->y . ")";
echo "(" . $pointTwo->x . ", " . $pointTwo->y . ")";
