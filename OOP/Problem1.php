<?php 

class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_speed(){
        return $this->speed;
    }
    public function get_mileage(){
        return $this->mileage;
    }
}


$vehicle = new Vehicle("Nissan Skyline GTR", 210, 400000);
echo "Car name is " . $vehicle->get_name() . " and speed is " . $vehicle->get_speed() . " and mileage is " . $vehicle->get_mileage();

?>