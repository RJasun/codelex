<?php declare(strict_types=1);

//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg. Create a secondary array with shipping
//costs per weight. Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
//Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$fruits = [
    ['name' => 'Apple', 'weight' => 1],
    ['name' => 'Banana', 'weight' => 2],
    ['name' => 'Pear', 'weight' => 3],
    ['name' => 'Passionfruit', 'weight' => 4],
    ['name' => 'Watermelon', 'weight' => 99],
];

function weightDeterminesPrice($weight) {
    if ($weight > 10) {
        return 2;
    }
    if ($weight < 10) {
        return 1;
    }
}

foreach ($fruits as $fruit) {
    $shippingCost = weightDeterminesPrice($fruit['weight']);
    echo "{$fruit['name']} ({$fruit['weight']}kg): Shipping cost is {$shippingCost} euro(s)" . PHP_EOL;
}