<?php

class Vehicle{ 
    public $name;
    public $speed;
    public $mileage;
    public $fuel = "Diesel";

    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;

   }
}
class Bus extends Vehicle{
}
class Car extends Vehicle{
}
$vehicle = new Vehicle ("Buick Wildcat", 80, 20000);
$bus = new Bus ("El Fueco", 160, 60000);
$car = new Car ("Supra", 120, 10000);


echo "Vehicle fuel: ". $vehicle->fuel. "<br>";
echo "Bus fuel: ". $bus->fuel. "<br>";
echo "Car fuel: ". $car->fuel. "<br>";

?>