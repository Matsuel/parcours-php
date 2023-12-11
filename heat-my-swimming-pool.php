<?php

interface PoolTempsInterface {
    function getActualTemp(): int;
    function getLastDaysTemps(): array;
    function setHeater(bool $value): void;
}

class PoolTemps implements PoolTempsInterface {
    public $isActive = false;
    public $currentTemp;
    public $averageTemps;

    public function __construct(int $currentTemp, array $averageTemps){
        $this->currentTemp = $currentTemp;
        $this->averageTemps = $averageTemps;
    }

    public function getActualTemp(): int {
        return $this->currentTemp;
    }

    public function getLastDaysTemps(): array {
        return $this->averageTemps;
    }

    public function setHeater(bool $value): void {
        $this->isActive = $value;
    }

    public function activateHeater(): void {
        $moyenne = array_sum($this->getLastDaysTemps()) / count($this->getLastDaysTemps());
        $moyenne >20 && $this->getActualTemp()>=25 ? $this->setHeater(true) : $this->setHeater(false);
    }
}

$poolTemps = new PoolTemps(25, [19, 20, 21, 16, 19, 23, 20]);
$poolTemps->activateHeater();

var_dump($poolTemps->isActive); // false

$poolTemps2 = new PoolTemps(26, [24, 26, 27, 25, 27, 23, 20]);
$poolTemps2->activateHeater();

var_dump($poolTemps2->isActive); // true