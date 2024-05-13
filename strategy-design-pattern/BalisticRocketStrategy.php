<?php

require_once( 'CalculateFlightStrategy.php');

class BalisticRocketStrategy implements CalculateFlightStrategy {
    public function calculateTime(array $items) : Int {

        $balisticCalculation = 50;

        return array_sum($items) - $balisticCalculation;
    }
}
