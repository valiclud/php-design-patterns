<?php

require_once('CalculateFlightStrategy.php');

class GroundGroundRocketStrategy implements CalculateFlightStrategy {
    public function calculateTime(array $items) : Int {

        $groundGroundCalculation = 90;

        return array_sum($items) - $groundGroundCalculation;
    }
}
