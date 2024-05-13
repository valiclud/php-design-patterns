<?php

require_once ('CalculateFlightStrategy.php');

class AirGroundRocketStrategy implements CalculateFlightStrategy {
    public function calculateTime(array $items) : Int {

        $airGroundCalculation = 20;

        return array_sum($items) - $airGroundCalculation;
    }
}
