<?php

namespace Commands;

use Builder\TruckBuilder;

$truck = new TruckBuilder;
$truck->createVehicle();

$truck->addWheel();
$truck->addDoors();
$truck->addEngine();

$truck->getVehicle();

var_dump($truck);