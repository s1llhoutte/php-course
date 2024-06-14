<?php

class Plant
{
    public $title;
    private $color;
    protected $season;

    public function __construct($title, $color, $season)
    {
        $this->title = $title;
        $this->color = $color;
        $this->season = $season;
    }

    private function someCalculation()
    {
    }

}

class Rose extends Plant
{
    public function anotherCalc() {
        $this->season = 'summer';
    }
}

$plant = new Plant('Tulpan', 'yellow', 'summer');


$rosa = new Rose('rosa', 'red', 'spring');
echo $rosa->title;