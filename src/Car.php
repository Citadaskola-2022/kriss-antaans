<?php

declare(strict_types=1);

class Car
{
    private int $odometer;

    private string $number_plate;



    public function __construct(
        int $odometer,
        string $number_plate,
        private float $fuelCosumption )
    {
        $this->odometer=$odometer;
        $this->number_plate=$number_plate;

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