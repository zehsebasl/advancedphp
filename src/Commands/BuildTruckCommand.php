<?php

namespace Commands;

use TruckBuilder;

$truck = new TruckBuilder;
$truck->createCehicle();

$truck->addWheel();
$truck->addDoors();
$truck->addEngine();

$truck->getVehicle();

var_dump($truck);