<?php

include 'FlightCalculation.php';
include 'BalisticRocketStrategy.php';
include 'GroundGroundRocketStrategy.php';
include 'AirGroundRocketStrategy.php';
    
    $items = array(10, 20, 30);

    $calc = new \FlightCalculation(new \BalisticRocketStrategy());
    echo $calc->calculateTime($items);
    
    $calc = new \FlightCalculation(new \GroundGroundRocketStrategy());
    echo $calc->calculateTime($items);

    $calc = new \FlightCalculation(new \AirGroundRocketStrategy());
    echo $calc->calculateTime($items);