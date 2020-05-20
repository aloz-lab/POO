<?php
    require_once 'Vehicle.php';

    class Truck extends Vehicle implements LightableInterface {
        const ALLOWED_ENERGIES = [
            'fuel',
            'electric'
        ];

        private $energy;
        private $storage;
        private $truckload = 0;

        public function __construct(string $color, int $nbSeats, string $energy, int $storage){
            parent::__construct($color, $nbSeats);
            $this->energy = $energy;
            $this->storage = $storage;
        }

        public function switchOn()
        {
            return true;
        }

        public function switchOff()
        {
            return false;
        }

        public function getEnergy(): string 
        {
            return $this->energy;
        }

        public function setEnergy(string $energy)
        {
            if(in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->setEnergy($energy);
            }
            return $this;
        }

        public function getStorage(): int 
        {
            return $this->storage;
        }

        public function setStorage(int $storage)
        {
            $this->storage = $storage;
        }

        public function getTruckload(): int 
        {
            return $this->truckload;
        }

        public function setTruckload(int $truckload)
        {
            $this->truckload = $truckload;
        }

        public function knowFull() 
        {
            if($this->truckload < $this->storage) {
                return "in filling";
            } else {
                return "full";
            }
        }
    }