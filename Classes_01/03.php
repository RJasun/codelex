<?php
declare(strict_types=1);
class FuelGauge {
    private int $currentFuel;

    public function __construct() {
        $this->currentFuel = 0;
    }

    public function getCurrentFuel(): int {
        return $this->currentFuel;
    }

    public function incrementFuel(): void {
        if ($this->currentFuel < 70) {
            $this->currentFuel++;
        }
    }

    public function decrementFuel(): void {
        if ($this->currentFuel > 0) {
            $this->currentFuel--;
        }
    }
}

class Odometer {
    private int $currentMileage;
    private FuelGauge $fuelGauge;

    public function __construct(FuelGauge $fuelGauge) {
        $this->currentMileage = 0;
        $this->fuelGauge = $fuelGauge;
    }

    public function getCurrentMileage(): int {
        return $this->currentMileage;
    }

    public function incrementMileage(): void {
        $this->currentMileage++;

        if ($this->currentMileage > 999999) {
            $this->currentMileage = 0;
        }

        if ($this->currentMileage % 10 == 0) {
            $this->fuelGauge->decrementFuel();
        }
    }
}
$fuelGauge = new FuelGauge();

for ($i = 0; $i < 20; $i++) {
    $fuelGauge->incrementFuel();
}

$odometer = new Odometer($fuelGauge);

while ($fuelGauge->getCurrentFuel() > 0) {
    $odometer->incrementMileage();
    echo "Current Mileage: " . $odometer->getCurrentMileage() . " km\n";
    echo "Current Fuel: " . $fuelGauge->getCurrentFuel() . " liters\n";
    echo "-----------------------------\n";
}
