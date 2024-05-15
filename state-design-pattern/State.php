<?php 
interface State
{
    public function rocketPrepare() : void;
    public function rocketFlight() : void;
    public function rocketFall() : void;
}