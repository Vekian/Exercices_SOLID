<?php

// TODO refactoriser le code pour respecter le Principe de d'Invertion de Dépendence de la programmation SOLID


class Computer
{
    public function on() {}
}

class Button 
{

    public function __construct(private Computer $computer)
    {
        
    }

    public function activate()
    {
        if (true) { //some condition
            $this->computer->on();
        }
    }
}