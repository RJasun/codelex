<?php declare(strict_types=1);

function gravityFormula(float $a, float $t, float $vi, float $xi): float {
return 0.5 * ($a * ($t ** 2)) + ($vi * $t) + $xi;
}
$metersTraveledObject = gravityFormula(-9.81, 10, 0, 0);

echo "if an object falls for 10 seconds, it will have a vertical position change of $metersTraveledObject meters";
