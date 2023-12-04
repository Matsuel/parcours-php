<?php

class Car 
{
    private float $tank;

    public function __construct()
    {
        $this->tank = 0;
    }

    public function getTank(): float
    {
        return $this->tank;
    }

    public function setTank(float $tank): void
    {
        $this->tank += $tank;
    }

    public function ride(float $distance){
        $consume= $distance/0.5;
        $this->tank -= $consume;
        if($this->tank < 0){
            $this->tank = 0;
        }
    }
}