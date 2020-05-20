<?php
    require_once 'Vehicle.php';
    require_once 'LightableInterface.php';

    class Bicycle extends Vehicle implements LightableInterface
    {
        public function switchOn()
        {
            if ($this->currentSpeed > 10){
                //return true;
                echo "switch on";
            } else {
                //return false;
                echo "switch off";
            }
        }

        public function switchOff()
        {
            //return false;
            echo "switch off";
        }
    }