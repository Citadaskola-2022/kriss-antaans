<?php

declare(strict_types=1);

require_once '../app/Car.php';

// $obj = stdClass();



# homework: driver (name, surname, age)
//xhprof_disable()
$car =(new Car(1000, number_plate: 'AB-1234', fuelCosumption: 14.6))
    ->addKilometers(kilometers: 200)
    ->addKilometers(kilometers: 500)
    ->getConsumedLiters();

$car =(new Car(odometer: 12500, number_plate: 'ZZ-23', fuelCosumption: 4.6))
    ->addKilometers(kilometers: 200)
    ->addKilometers(kilometers: 500)
    ->getConsumedLiters();

$Driver =(new Driver(name: 'jankels', surname: 'beerzs', age: 54));


//require __DIR__ . '/../bootstrap/app.php';
