<?php declare(strict_types=1);

//Create a person object with name, surname and age. Create a function that will determine if the person has reached 18 years of age.
//Print out if the person has reached age of 18 or not.




$person = [];

$peter = new stdClass();
$peter->name = 'Peter';
$peter->surname = 'Parker';
$peter->age = 20;

$person[] = $peter;

function adultOrNot($person) {
    if ($person->age >= 18) {
        return "The person has reached the age of 18";
    } else {
        return "The person has not reached the age of 18 yet.";
    }
}

$result = adultOrNot($peter);
echo $result;




