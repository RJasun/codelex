<?php

//Given array

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
//Program should display concatenated value of - Jane Doe 41

$concatenatedValue = $items[0][1]["name"] . " " . $items[0][1]["surname"] . " " . $items[0][1]["age"];
echo $concatenatedValue;
