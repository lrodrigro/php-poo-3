<?php

//Truck.php

require_once ('Vehicle.php');

class Truck extends Vehicle
{
    /**
    * @var integer
    */
    private $storage;

    /**
    * @var integer
    */
    private $load = 0;

    /**
    * @param integer $storage
    * @param string $color
    * @param integer $nbSeats
    * @param string $energy
    */
    public function __construct(int $storage, string $color, int $nbSeats, string $energy)
    {
        $this->storage = $storage;
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(int $load): string
    {
        if ($load > $this->storage){
            return ('Full');            
        } else {
            $this->load = $load;
            return ('Filling');
        }        
    }
}