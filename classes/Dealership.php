<?php
require_once __DIR__ . '/Vehicle.php'; // run all code from Vehicle.php once

Class Dealership {
    private array $inventory = []; //inventory of all vehicles

    public function addVehicle(Vehicle $vehicle): void { //Vehicle refers to type of variable that can be passed in (only a Vehicle object), $vehicle refers to the one that was actually passed in
        $this->inventory; //add this particular vehicle object to the dealership's inventory array
    }
}