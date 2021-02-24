<?php

use Vehicle;

class VehicleDirector
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createCehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}