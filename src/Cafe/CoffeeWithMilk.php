<?php

namespace App\Cafe;

class CoffeeWithMilk extends Coffee
{
    public int $volume = 250;

    public function __construct()
    {
        parent::__construct();
        $this->volume = 250;
    }

    public function brew():void
    {
        //var_dump($this->portions);
        foreach ($this->portions as $i => $portion){
            echo sprintf('%s: adding %dml portion to coffee with milk' . PHP_EOL , $i , $portion);
        }
    }

    public function addMilk()
    {
        $this->portions['milk'] = 100;
    }

}

