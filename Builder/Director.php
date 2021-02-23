<?php

include_once ('Parts/Vehicle.php');

class Director
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