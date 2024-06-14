<?php

interface Sportsmen
{
    public function run();
    public function gym();
    public function eat();
}

class Gymnast implements Sportsmen
{

    public function run()
    {
        echo 'i\'m running';
    }

    public function gym()
    {
        echo 'i\'m gym';
    }

    public function eat()
    {
        echo 'i\' eat';
    }
}