<?php
    require 'Car.php';
    require 'Bicycle.php';

    $bike1 = new Bicycle("red");
    //var_dump($bike1);
    //echo $bike1->getColor();

    $bike2 = new Bicycle("yellow");
    //var_dump($bike2);
    $bike2->setColor("green");
    //var_dump($bike2);
    
    
    $car1 = new Car("black", 5, "diesel");
    //var_dump($car1);
    //echo $car1->getColor();

    $car2 = new Car("blue", 4, "gas");
    //var_dump($car2);

    echo $bike1->forward();
    echo"<br>";
    echo $bike1->brake();
    echo"<br>";

    echo $car1->start();
    echo"<br>";
    //var_dump($car1);
    echo $car1->forward();
    echo"<br>";
    echo $car1->brake();




