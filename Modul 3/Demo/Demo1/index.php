<?php

require 'models/Vehicle.php';
require 'views/VehicleView.php';
require 'controllers/VehicleController.php';

use VehicleManagement\Controllers\VehicleController;

$controller = new VehicleController();
$controller->showCarInfo("Toyota", "Camry", 4);
$controller->showMotorcycleInfo("Yamaha", "YZF-R1", "Sport");
