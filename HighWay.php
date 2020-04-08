<?php

    abstract class HighWay
    {
        /**
         * @var array
         */
        protected $currentVehicles;

        /**
         * @var integer
         */
        protected $nbLane;

        /**
         * @var integer
         */
        protected $maxSpeed;

        public function getCurrentVehicles(): array
        {
            return $this->currentVehicles;
        }

        public function setCurrentVehicles(string $currentVehicles): void
        {
            $this->currentVehicles = $currentVehicles;
        }

        public function getNbLane(): integer
        {
            return $this->nbLane;
        }

        public function setNbLane(string $nbLane): void
        {
            $this->nbLane = $nbLane;
        }

        public function getMaxSpeed(): integer
        {
            return $this->maxSpeed;
        }

        public function setMaxSpeed(string $maxSpeed): void
        {
            $this->maxSpeed = $maxSpeed;
        }

        abstract public function addVehicle($vehicle);
    }
