<?php 

class Context
{
    private State $state;

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function printRocketPrepare()
    {
        $this->state->rocketPrepare();
    }
    public function printRocketFlight()
    {
        $this->state->rocketFlight();
    }
    public function printRocketFall()
    {
        $this->state->rocketFall();
    }
}