<?php

namespace App\Cafe;

class IcedCoffee
{
    private Coffee $coffee;
    public function __construct(\App\Cafe\Coffee $coffee)
    {
        $this->coffe = $coffee;
    }

    public function addIce(int $pieced): void
    {
        $this->ice += $pieces;
    }

    public function prepare(int $volume)
    {
        $this->coffee->prepare($volume);
    }

    public function brew()
    {
        $this->coffee->brew();
    }

}