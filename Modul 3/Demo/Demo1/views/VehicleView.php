<?php

namespace VehicleManagement\Views;

class VehicleView {
    public function displayInfo($vehicle) {
        echo $vehicle->getInfo() . "<br>"; // Tambahkan <br> di sini untuk memisahkan baris
    }

    public function displayHonk($vehicle) {
        echo $vehicle->honk() . "<br>"; // Tambahkan <br> di sini untuk memisahkan baris
    }
}
