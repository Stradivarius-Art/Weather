<?php

require_once __DIR__ . '/vendor/autoload.php';

use Plasma\Weather;

$weather = new Weather('aefb6565d3014f668c991035230108');
$weather = $weather->location('Volgograd')->get();

dd(
    $weather->getcelsius(),
    $weather->getfahrenheit()
);


?>