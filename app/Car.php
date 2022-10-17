<?php

declare(strict_types=1);

namespace App\Notifications\Driver;

class Car
{
    public ?Driver $driver = null;
    private int $odometer;
    private string $number_plate;
    public function __construct(
        int $odometer,
        string $number_plate,
        private float $fuelCosumption
    )
    {
        $this->odometer = $odometer;
        $this->number_plate = $number_plate;

    }
    public function addKilometers (int $kilometers): Car
    {
        #$this->odometer=$this->odometer+$kilometers;
        $this->odometer=+$kilometers; #iisaaks
        return $this;
    }
    public function getConsumedLiters():float
    {
        return $this->odometer * $this->fuelCosumption /100;
    }
    public function  __destruct()
    {
        echo "Car $this->number_plate Destroyed </br>". PHP_EOL;
    }

}