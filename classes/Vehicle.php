<?php

class Vehicle {
    public string $make;
    public string $model;
    public int $year;
    public string $package;
    public float $price;

    public function __construct (string $make, string $model, int $year, string $package, float $price) { //constructor function creates instances of the class
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->package = $package;
        $this->price = $price;
    }

    public function summary(): string { //create quick human readale string
        return "{$this->year} {$this->make} {$this->model} ({$this->package}) - $" . number_format($this->price, 2);
    }


    public function toArray(): array {  //create an associative array for exporting or filtering data more easily
        return [
            'make' => $this->make,
            'model' => $this->model,
            'year' => $this->year,
            'package' => $this->package,
            'price' => $this->price
        ];
    }
}
