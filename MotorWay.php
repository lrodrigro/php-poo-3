<?php

// Final Class MotorWay

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    /*
    * @var int
    */
    protected $nbLane = 4;

    /*
    * @var int
    */
    protected $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle) : MotorWay
    {
        if($vehicule instanceof Car){
            $this->setCurrentVehicles($vehicle);
        }

        return $this;
    }

}