<?php

include_once ('Parts/Door.php');
include_once ('Parts/Engine.php');
include_once ('Parts/Wheel.php');
include_once ('Parts/Truck.php');
include_once ('Parts/Vehicle.php');

include_once ("Builder.php");

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }
    
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function createCehicle()
    {
        $this->truck = new Truck();

    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}