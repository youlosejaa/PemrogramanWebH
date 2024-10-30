<?php

namespace VehicleManagement\Controllers;

use VehicleManagement\Models\Car;
use VehicleManagement\Models\Motorcycle;
use VehicleManagement\Views\VehicleView;

class VehicleController {
    private $view;

    public function __construct() {
        $this->view = new VehicleView();
    }

    public function showCarInfo($brand, $model, $numberOfDoors) {
        $car = new Car($brand, $model, $numberOfDoors);
        $this->view->displayInfo($car);
        $this->view->displayHonk($car);
    }

    public function showMotorcycleInfo($brand, $model, $type) {
        $motorcycle = new Motorcycle($brand, $model, $type);
        $this->view->displayInfo($motorcycle);
        $this->view->displayHonk($motorcycle);
    }
}
