<?php

namespace VehicleManagement\Models;

// Trait untuk kemampuan berbunyi klakson
trait HornTrait {
    public function honk() {
        return "Beep! Beep!";
    }
}

// Abstract Class untuk kendaraan
abstract class Vehicle {
    protected $brand;
    protected $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    abstract public function getInfo();

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }
}

// Class Car yang menginherit Vehicle
class Car extends Vehicle {
    use HornTrait;

    private $numberOfDoors;

    public function __construct($brand, $model, $numberOfDoors) {
        parent::__construct($brand, $model);
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getInfo() {
        return "Car: {$this->brand} {$this->model}, Doors: {$this->numberOfDoors}";
    }
}

// Class Motorcycle yang menginherit Vehicle
class Motorcycle extends Vehicle {
    use HornTrait;

    private $type;

    public function __construct($brand, $model, $type) {
        parent::__construct($brand, $model);
        $this->type = $type;
    }

    public function getInfo() {
        return "Motorcycle: {$this->brand} {$this->model}, Type: {$this->type}";
    }
}
