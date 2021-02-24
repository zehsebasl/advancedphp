<?php

namespace Commands;

use CarBuilder;

$car = new CarBuilder;
$car->createCehicle();

$car->addDoors();
$car->addEngine();
$car->addWheel();

$car->getVehicle();

var_dump($car);
