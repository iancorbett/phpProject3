<?php
require_once __DIR__ . '/Vehicle.php'; // run all code from Vehicle.php once

Class Dealership {
    private array $inventory = []; //inventory of all vehicles

    //void means function does not return anything
    public function addVehicle(Vehicle $vehicle): void { //Vehicle refers to type of variable that can be passed in (only a Vehicle object), $vehicle refers to the one that was actually passed in
        $this->inventory; //add this particular vehicle object to the dealership's inventory array
    }

    //this function will return an array
    public function getInventory(): array {
        return $this->inventory; //return all the inventory for this dealership
    }

    //function will not return anything
    public function clearInventory(): void {
        $this->inventory = []; //set this dealerships inventory to an emty array
    }

    //returns sum total of all cars in dealership as a float
    public function totalValue(): float {
        $sum = 0;
        foreach ($this->inventory as $car) {
            $sum += $car->price;
        }
        return $sum;
    }
}