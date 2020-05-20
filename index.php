<?php
require 'Vehicle.php';
require 'Car.php';
require 'Bicycle.php';
require 'Truck.php';
require 'HighWay.php';
require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';
require 'SkateBoard.php';

//$truck1 = new Truck("black", 3, "electric", 80);
/*var_dump($truck1);
echo $truck1->knowFull();
$truck1->setTruckload(80);
var_dump($truck1);
echo $truck1->knowFull();

$truck2 = new Truck("red", 4, "fuel", 100);
var_dump($truck2);

echo $truck1->forward();
echo"<br>";
echo $truck1->brake();
echo"<br>";*/

$bike1 = new Bicycle("red", 1);
//var_dump($bike1);
//echo $bike1->getColor();
$bike1->setCurrentSpeed(20);
var_dump($bike1);
$bike1->switchOn();
echo "<br>";
$bike1->switchOff();
echo "<br>";

/*$bike2 = new Bicycle("yellow");
//var_dump($bike2);
$bike2->setColor("green");
//var_dump($bike2);

echo $bike1->forward();
echo"<br>";
echo $bike1->brake();
echo"<br>";*/

$car1 = new Car("black", 5, "diesel");
var_dump($car1);
//echo $car1->getColor();
//$car1->setCurrentSpeed(20);
$car1->switchOn();
echo "<br>";
$car1->switchOff();

//$car2 = new Car("blue", 4, "gas");
//var_dump($car2);

$skate1 = new SkateBoard("red", 0);
var_dump($skate1);
//$skate1->switchOn();

/*echo"<br>";
$car1->setHasParkBrake(false);
echo $car1->start();
var_dump($car1);
echo"<br>";*/

//echo $car1->forward();
//echo"<br>";
//echo $car1->brake();

/*$motorWay1 = new MotorWay();
//$motorWay1->setCurrentVehicles("car");
//var_dump($motorWay1);
$motorWay1->addVehicle($car1);
$motorWay1->addVehicle($truck1);
$motorWay1->addVehicle($bike1);
var_dump($motorWay1);

$pedestrianWay1 = new PedestrianWay();
//var_dump($pedestrianWay1);
$pedestrianWay1->addVehicle($bike1);
$pedestrianWay1->addVehicle($car1);
var_dump($pedestrianWay1);

$residentialWay1 = new ResidentialWay();
//var_dump($residentialWay1);
$residentialWay1->addVehicle($car1);
$residentialWay1->addVehicle($truck1);
$residentialWay1->addVehicle($bike1);
var_dump($residentialWay1);*/


