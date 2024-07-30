<?php

// TODO refactoriser le code pour respecter le Principe de Ségregation des Interface de la programmation SOLID


interface Vehicule
{
    public function run();
}

interface WithFuel
{
    public function turnOn();
    public function fuel();
}

class Motorcycle implements Vehicule, WithFuel
{
    public function turnOn()
    {
        echo 'Motorcycle Turning on...';
    }

    public function run()
    {
        echo 'Motorcycle running...';
    }

    public function fuel()
    {
        echo 'Fuel the Motorcycle';
    }
}

class Bicycle implements Vehicule
{
	
	public function run() 
	{
		echo 'Bicycle running...';
	}
}