<?php

//Abstract Class HighWay

abstract class HighWay
{
    /*
    * @var array
    */
    private $currentVehicles = [];

    /*
    * @var int
    */
    private $nbLane;

    /*
    * @var int
    */
    private $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle) :self;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
} 