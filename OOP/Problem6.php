<?php

class Vehicle {
    public $name;
    public $speed;
    public $mileage;
    public $fare;

    public function __construct($name, $speed, $mileage, $fare) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
        $this->fare = $fare;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_speed() {
        return $this->speed;
    }

    public function get_mileage() {
        return $this->mileage;
    }
    public function fare(){
      return $this->fare;
    }
}

class Bus extends Vehicle {
  public $seating_capacity = 50; 
public function get_seating_capacity() {
   return $this->seating_capacity;
}


  public function fare(){
    $total_fare = $this->seating_capacity * 100;
    $bus_fare = $total_fare + ($total_fare * 0.10);
    return $bus_fare;
  }

 }

$bus = new Bus("El Bimbo", 160, 200000, 50);
echo "The Bus name is " . $bus->get_name() . " it's speed is " . $bus->get_speed() . " and its mileage is " . $bus->get_mileage() . " with the maximum seating capacity of " . $bus->get_seating_capacity() . ", The bus total or final fare is " . $bus->fare();

?>