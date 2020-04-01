<?php
class Car {
    private $nbWheels;
    private $currentSpeed; 
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy){
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): int {
        return $this->enregyLevel;
    }

    public function start() {
        $this->energyLevel = 100;
        return "Start !";
    }

    public function forward() {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }



}