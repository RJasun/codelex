<?php declare(strict_types=1);
class Survey {
    private int $totalSurveyed;
    private float $purchasePercentage;
    private float $prefersCitrus;

    public function __construct(int $totalSurveyed, float $purchasePercentage, float $prefersCitrus)
    {
        $this->purchasePercentage = $purchasePercentage;
        $this->totalSurveyed = $totalSurveyed;
        $this->prefersCitrus = $prefersCitrus;
    }
    public function getCustomerAmount(): int {
        return (int)($this->totalSurveyed * $this->purchasePercentage);
    }
    public function getCitrusLovers(): int {
        return (int)($this->getCustomerAmount() * $this->prefersCitrus);
    }
}

$survey = new Survey(12467, 0.14, 0.64);
$customerAmount = $survey->getCustomerAmount();
$citrusLovers = $survey->getCitrusLovers();
echo "From the survey data, out of 12467 people, " . $customerAmount . " are buying at least once a week, and from them "
    . $citrusLovers . " prefer citrus flavoured energy drinks";

