<?php
$cityName = readline("Choose a city: ");
$cityName = strtolower($cityName);

$locationData = json_decode(file_get_contents("http://api.openweathermap.org/geo/1.0/direct?q=$cityName&limit=1&appid=b60094af9bb4f07f6ebbdb3e584778b5"), true);

$latitude = $locationData[0]['lat'];
$longitude = $locationData[0]['lon'];

$weatherData = json_decode(file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&units=metric&appid=b60094af9bb4f07f6ebbdb3e584778b5"), true);

$temperature = $weatherData['main']['temp'];
$locationName = $weatherData['name'];
$temperatureFeelsLike = $weatherData['main']['feels_like'];
$weatherDescription = $weatherData['weather'][0]['description'];
$pressure = $weatherData['main']['pressure'];
$humidity = $weatherData['main']['humidity'];

echo "Weather in $locationName is following: " . PHP_EOL;
echo "The weather condition is $weatherDescription" . PHP_EOL;
echo "Temperature is $temperature degrees Celsius" . PHP_EOL;
echo "Temperature feels like $temperatureFeelsLike degrees Celsius" . PHP_EOL;
echo "Pressure is $pressure hPa" . PHP_EOL;
echo "Humidity is $humidity%";
