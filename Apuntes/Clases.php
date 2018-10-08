<?php

interface Refill {
    function refuel();
    function chargeBatteries();
}

class Vehicle {
    private $plate;
    private $brand;
    private $year;

    // Todos los metos que empiezan por doble guión __ se llaman métodos mágicos
    function __construct($plate, $brand, $year){
        $this->plate = $plate;
        $this->brand = $brand;
        $this->year = $year;
    }

    public function getPlate(){
        return $this->plate;
    }

    public function setPlate($plate){
        $this->plate = $plate;
    }

    public function __toString(){
        return $this->plate. " # ".
                $this->brand. " # ".
                $this->year. " # ";
    }

}

class DieselCar extends Vehicle implements Refill {
    function refuel(){
        echo "Fueling the car...";
    }
}

class ElectricCar extends Vehicle implements Refill {
    function chargeBatteries(){
        echo "Charging car batteries...";
    }
}

$car = new Vehicle("GBY-3454", "Renault", "2015");
/* $car->plate="GBY-3454";
$car->brand="Renault";
$car->year="2015"; */

/* echo '<pre>';
var_dump($car);
echo '</pre>'; */

echo $car;

?>