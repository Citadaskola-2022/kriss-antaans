<?php

namespace Exam;

use Exception;

class Forma
{
    public string $nosaukums;


    public function __tostring(): string
    {
        return $this->nosaukums . ' ' . $this->perimetrs;
    }

}

class Square extends Forma
{
    public function __construct(int $x)
    {
        $this->nosaukums = 'Square';
        $this->perimetrs = $x * 4;
    }
}

class Rectangle extends Forma
{
    public function __construct(int $augstums, $platums)
    {
        $this->nosaukums = 'Rectangle';
        $this->perimetrs = 2 * ($augstums * $platums);
    }
}

class Triangle extends Forma
{
    public function __construct($a, $b, $c)
    {
        $this->nosaukums = 'Triangle';
        $this->perimetrs = $a + $b + $c;
    }


}

try {
    echo new square (5);
    echo new rectangle (6, 7);
    echo new triangle (2, 6, 8);
} catch (Exception $e) {
    echo $e->getMessage();
}




