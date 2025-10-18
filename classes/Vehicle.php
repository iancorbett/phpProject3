<?php

class Vehicle {
    public string $make;
    public string $model;
    public int $year;
    public string $package;
    public float $price;

    public function __construct (string $make, string $model, int $year, string $package, float $price) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->package = $package;
        $this->price = $price;
    }
}
