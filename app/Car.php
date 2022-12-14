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

class Car
{
    private int $odometer;

    private string $number_plate;

    private float $fuelCosumption;

    public function __construct(
        int $odometer,
        string $number_plate,
        float $fuelCosumption )
    {
        $this->odometer=$odometer;
        $this->number_plate=$number_plate;
        $this->fuelCosumption = $fuelCosumption;
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

class driver
{
    public string $name;

    public string $surname;

    public int $age;

    public function __construct(
        string $name,
        string $surname,
        int $age )
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->age = $age;
    }

    public function  __destruct()
    {
        echo "Driver $this->name $this->surname $this->age Destroyed </br>". PHP_EOL;
    }



}