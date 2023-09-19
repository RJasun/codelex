<?php declare(strict_types=1);

$person = new stdClass();
$person->name = 'Janis Berzins';
$person->licenses = ['A', 'B'];
$person->cash = 1500;

$guns = [
    (object)['name' => 'Shotgun', 'licence' => 'B', 'price' => 1300],
    (object)['name' => 'AK47', 'licence' => 'A', 'price' => 1500],
    (object)['name' => 'AWP', 'licence' => 'C', 'price' => 2000],
];

foreach ($guns as $gun) {
    if (in_array($gun->licence, $person->licenses) && $person->cash >= $gun->price) {
 echo $person->name . ' can buy ' . $gun->name . PHP_EOL;
} else {
        echo $person->name . ' cant buy ' . $gun->name . PHP_EOL;
}
}

