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
}
class Bus extends Vehicle{
  public $seating_capacity;

  public function __construct($seating_capacity){
    $this->seating_capacity = $seating_capacity;
  }
  public function get_seating_capacity(){
    return $this->seating_capacity;
  }
  }  

  $bus = new Bus(50);
  echo "The bus maximum seating capacity is ". $bus->seating_capacity

?>