<?php 

include ('Parts/Door.php');
include ('Parts/Engine.php');
include ('Parts/Wheel.php');
include ('Parts/Truck.php');
include ('Parts/Vehicle.php');



class CarBuilder implements Builder
{
    private Car $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function createCehicle()
    {
        $this->car = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}