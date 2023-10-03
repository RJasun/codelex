<?php
class AsciiFigure {
    const SIZE = 5;
    private $size;

    public function __construct($size = self::SIZE) {
        $this->size = $size;
    }

    public function drawFigure() {
        for ($i = 0; $i < $this->size; $i++) {
            for ($j = 0; $j < 4 * ($this->size - $i); $j++) {
                echo '/';
            }
            for ($j = 0; $j < 8 * $i; $j++) {
                echo '*';
            }
            for ($j = 0; $j < 4 * ($this->size - $i); $j++) {
                echo '\\';
            }
            echo PHP_EOL;
        }
    }
}

$figure = new AsciiFigure();
$figure->drawFigure();