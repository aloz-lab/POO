<?php
    require_once 'HighWay.php';
    require_once 'Bicycle.php';

    final class PedestrianWay extends HighWay
    {
        protected $nbLane = 1;
        protected $maxSpeed = 10;

        public function addVehicle($vehicle)
        {
            // TODO: Implement addVehicle() method.
            if($vehicle instanceof Bicycle) {
                $this->currentVehicles[] = $vehicle;
            }
        }
    }