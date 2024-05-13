<?php 

require_once( 'CalculateFlightStrategy.php');

class FlightCalculation {

    private $strategy;
    
    public function __construct(CalculateFlightStrategy $strategy) {
        $this->strategy = $strategy;
    }
    
    public function calculateTime(array $items) {
        return $this->strategy->calculateTime($items);
    }
}