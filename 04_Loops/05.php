<?php
//Create an associative array with objects of multiple persons.
//Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.

$people = [
    [
        "name" => "Gordon",
        "surname" => "Ryan",
        "age" => 28,
        "birthday" => "1995-06-08"
    ],
    [
        "name" => "Mike",
        "surname" => "Tyson",
        "age" => 29,
        "birthday" => "1994-06-08",
    ],
    [
        "name" => "Terry",
        "surname" => "Crew",
        "age" => 30,
        "birthday" => "1993-06-08",
    ],
         ];

foreach ($people as $person) {
    echo "name: " . $person["name"] . "\n" ;
    echo "surname: " . $person["surname"] . "\n" ;
    echo "age: " . $person["age"] . "\n" ;
    echo "birthday: " . $person["birthday"] . "\n" ;
}