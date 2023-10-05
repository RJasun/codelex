<?php declare(strict_types=1);
class Date {
    private int $month;
    private int $day;
    private int $year;
    public function __construct(int $month, int $day, int $year) {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }
    public function getMonth(): int {
        return $this->month;
    }
    public function setMonth(int $month): void
    {
        if ($this->month < 1 || $this->month > 12) {
            echo "Month should be entered from 1 to 12";
        }
        $this->month = $month;
    }
    public function getDay(): int {
        return $this->day;
    }
    public function setDay(int $day): void
    {
        if ($this->day < 1 || $this->day > 31) {
            echo "Day should be chosen from 1 to 31";
        }
        $this->day = $day;
    }
    public function getYear(): int {
        return $this->year;
    }
    public function setYear(int $year): void
    {
        $this->year = $year;
    }
    public function displayDate(): string {
        return $this->getMonth() . "/" . $this->getDay() . "/" . $this->getYear();
    }
}
        $date = new Date(10, 5, 2023);
        echo "Date: " . $date->displayDate() . PHP_EOL;

        $date->setMonth(12);
        $date->setDay(25);
        $date->setYear(2023);
        echo "Updated Date: " . $date->displayDate() . PHP_EOL;
