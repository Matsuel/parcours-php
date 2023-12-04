<?php

abstract class AbstractGeometry {
    abstract public function area(): int;
    abstract public function perimeter(): int;
}

class Rectangle extends AbstractGeometry {
    public float $width;
    public float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): int {
        return $this->width * $this->height;
    }

    public function perimeter():int{
        return ($this->width + $this->height) * 2;
    }
}

class Square extends AbstractGeometry{
    public float $side;

    public function __construct(float $side){
        $this->side = $side;
    }

    public function area(): int{
        return $this->side ** 2;
    }

    public function perimeter(): int{
        return $this->side * 4;
    }
}

class Triangle extends AbstractGeometry{
    public float $base;
    public float $height;

    public function __construct(float $base, float $height){
        $this->$base=$base;
        $this->$height=$height;
    }

    public function area(): int{
        return ($this->base * $this->height) / 2;
    }

    public function perimeter(): int{
        return $this->base * 3;
    }
}