<?php

require_once('State.php');
class GroundGroundRocketStates implements State {

    public function rocketPrepare(): void {
    echo "Ground-Ground Rocket: 40 minutes to prepare.\n";
    }
    public function rocketFlight() : void {
        echo "Ground-Ground Rocket: 20 minutes flight.\n";
    }
    public function rocketFall(): void {
        echo "Ground-Ground Rocket: 20 seconds falling.\n";
    }
}