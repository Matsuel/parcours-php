<?php
class Car
{
    private float $tank;

    public function __construct(float $tank = 0) {
        $this->tank = $tank;
    }

    public function ride(float $value): self {
        $this->tank -= $value / 20;

        return $this;
    }
    
    public function getTank(): float {
        return $this->tank;
    }

    public function setTank(float $amount): self {
        $this->tank = $amount;

        return $this;
    }
}