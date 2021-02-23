<?php

include_once('../Builder/CarBuilder.php');

$car = new CarBuilder;
$car->createCehicle();

$car->addDoors();
$car->addEngine();
$car->addWheel();

$car->getVehicle();

var_dump($car);
