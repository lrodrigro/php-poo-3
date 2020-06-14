<?php

// Final Class PedestrianWay

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /*
    * @var int
    */
    protected $nbLane = 1;
    
    /*
    * @var int
    */
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle) : PedestrianWay 
    {
        if($vehicle instanceof Bike || $vehicle instanceof Skateboard){
            $this->setCurrentVehicles($vehicle);
        }

        return $this;
    }

}