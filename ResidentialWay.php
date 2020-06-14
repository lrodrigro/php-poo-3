<?php

// Final Class ResidentialWay

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    /*
    * @var int
    */
    protected $nbLane = 2;
    
    /*
    * @var int
    */
    protected $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle) : ResidentialWay 
    {
        if($vehicule instanceof Car){
            $this->setCurrentVehicles($vehicle);
        }

        return $this;
    }

}