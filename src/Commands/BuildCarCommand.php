<?php

namespace Commands;

use Builder\CarBuilder;

$car = new CarBuilder;
$car->createVehicle();

$car->addDoors();
$car->addEngine();
$car->addWheel();

$car->getVehicle();

var_dump($car);
