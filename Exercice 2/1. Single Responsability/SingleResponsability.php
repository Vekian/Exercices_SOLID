<?php

namespace SRPViolation;

interface DataChannel {
    public function send($c);

    public function receive();
}

interface Connection {
    public function dial($pno);

    public function hangup();

}

class Modem implements DataChannel, Connection
{
    public function send($c){

    }

    public function receive(){

    }

    public function dial($pno){

    }

    public function hangup(){

    }
}