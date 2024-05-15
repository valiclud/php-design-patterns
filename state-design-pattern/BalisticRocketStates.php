<?php

require_once('State.php');
class BalisticRocketStates implements State {
    public function rocketPrepare(): void {
    echo "Balistic Rocket: 60 minutes to prepare.\n";
    }
    public function rocketFlight() : void {
        echo "Balistic Rocket: 10 minutes flight.\n";
    }
    public function rocketFall(): void {
        echo "Balistic Rocket: 20 seconds falling.\n";
    }
}