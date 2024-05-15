<?php 

include 'State.php';
include 'Context.php';
include 'BalisticRocketStates.php';
include 'GroundGroundRocketStates.php';
include 'AirGroundRocketStates.php';

$context = new \Context();
$context->setState(new \BalisticRocketStates());
$context->printRocketPrepare();
$context->printRocketFlight();
$context->printRocketFall();

$context->setState(new \GroundGroundRocketStates());
$context->printRocketPrepare();
$context->printRocketFlight();
$context->printRocketFall();

$context->setState(new \AirGroundRocketStates());
$context->printRocketPrepare();
$context->printRocketFlight();
$context->printRocketFall();