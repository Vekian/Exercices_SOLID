<?php

// TODO refactoriser le code pour respecter le principe OCP de la programmation SOLID

abstract class Vehicle 
{
    public function run(){}

    abstract public function turnOn();
}

class Motorcycle extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the car';
    }
}

class Car extends Vehicle
{
    public function turnOn()
    {
        echo 'Turning on the motorcycle';
    }
}

class Driver 
{
    public function drive(Vehicle $vehicle)
    {
        $vehicle->turnOn();
        
        $vehicle->run();
    }
}