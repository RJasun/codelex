<?php declare(strict_types=1);

$person = new stdClass();

echo "Choose the unit system (imperial/metric): ";
$unitSystem = strtolower(readline());

if ($unitSystem === "imperial") {
    echo "Enter your weight in lbs: ";
    $person->weight = (float)readline();

    echo "Enter your height in inches: ";
    $person->height = (float)readline();
} elseif ($unitSystem === "metric") {
    echo "Enter your weight in kg: ";
    $person->weight = (float)readline();

    echo "Enter your height in meters: ";
    $person->height = (float)readline();
} else {
    echo "Invalid unit system choice. Please choose 'imperial' or 'metric'.";
    exit;
}

function BMIcalculation($weight, $height, $unitSystem): float {
    if ($unitSystem === "imperial") {
        return $weight * 703 / ($height ** 2);
    } elseif ($unitSystem === "metric") {
        return $weight / ($height ** 2);
    } else {
        return 0;
    }
}

$BMI = BMIcalculation($person->weight, $person->height, $unitSystem);

$BMIclassification = '';

if ($BMI >= 18.5 && $BMI <= 25) {
    $BMIclassification .= "You have an optimal weight.";
}
    if ($BMI < 18.5) {
        $BMIclassification .= "You are underweight.";
    }
    if ($BMI > 25) {
        $BMIclassification .= "You are overweight.";
}
echo "Your BMI is $BMI. $BMIclassification";
