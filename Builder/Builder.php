<?php

include_once ('Parts/Vehicle.php');

interface Builder {
    public function createCehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle(): Vehicle;
}