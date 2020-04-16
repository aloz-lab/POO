<?php
    require_once 'Vehicle.php';

    class Car extends Vehicle {
        const ALLOWED_ENERGIES = [
            'fuel',
            'electric'
        ];
        
        private $energy;
        private $energyLevel;
        /**
         * @var bool
         */
        private $hasParkBrake = TRUE;

        public function __construct(string $color, int $nbSeats, string $energy)
        {
            parent::__construct($color, $nbSeats);
            $this->energy = $energy;
        }

        public function getEnergy(): string 
        {
            return $this->energy;
        }

        public function setEnergy(string $energy): Car
        {
            if(in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->setEnergy($energy);
            }
            return $this;
        }

        public function getEnergyLevel(): int 
        {
            return $this->energyLevel;
        }

        public function setEnergyLevel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }

        public function start()
        {
            try {
                if ($this->hasParkBrake) {
                    throw new Exception("Le frein à main est actif");
                }
            } catch (Exception $e) {
                echo $e;
            }finally {
            return "Ma voiture roule comme un donut";
            //$this->energyLevel = 100;
            //return "Start !";
            }
        }

        /**
         * @return bool
         */
        public function getHasParkBrake()
        {
            return $this->hasParkBrake;
        }

        /**
         * @param bool $hasParkBrake
         */
        public function setHasParkBrake($hasParkBrake)
        {
            $this->hasParkBrake = $hasParkBrake;
        }

    }