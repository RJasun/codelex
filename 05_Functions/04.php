<?php declare(strict_types=1);

//Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.

function adultOrNot($person) {
    if ($person->age >= 18) {
        return "The person has reached age 18";
    } else {
        return "The person has not reached age 18";
    }
    }

    $person = [];

$Tom = new stdClass();
$Tom->name = "Tom";
$Tom->surname = "Jerry";
$Tom->age = 15;

$person[] = $Tom;

$Kate = new stdClass();
$Kate->name = "Kate";
$Kate->surname = "Perry";
$Kate->age = 21;

$person[] = $Kate;

$Jim = new stdClass();
$Jim->name = "Jim";
$Jim->surname = "Kerry";
$Jim->age = 99;

$person[] = $Jim;

foreach ($person as $person) {
    $result = adultOrNot($person);
    echo "{$person->name} {$person->surname}: {$result}" . PHP_EOL;
}