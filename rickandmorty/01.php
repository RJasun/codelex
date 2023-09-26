<?php

$json = file_get_contents('https://rickandmortyapi.com/api/episode');

$data = json_decode($json);