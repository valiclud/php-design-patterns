<?php

require_once('State.php');
class AirGroundRocketStates implements State {

    public function rocketPrepare(): void {
    echo "Air-Ground Rocket: 30 minutes to prepare.\n";
    }
    public function rocketFlight() : void {
        echo "Air-Ground Rocket: 10 minutes flight.\n";
    }
    public function rocketFall(): void {
        echo "Air-Ground Rocket: 20 seconds falling.\n";
    }
}