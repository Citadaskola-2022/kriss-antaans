<?php

class Forma
{
    public float $laukums = 0;
    public string $nosaukums;

    public function __tostring(): string
    {
        if ($this->laukums == 0) {
            return "nerukaa";
        }

        return $this->nosaukums . ' ' . $this->laukums;

    }

}

class Square extends Forma
{
    public function __construct(int $x)
    {
        $this->nosaukums = 'Square';
        $this->laukums = $x * $x;
    }
}

class Rectangle extends Forma
{
    public function __construct(int $augstums, int $platums)
    {
        if ($augstums <= 0) {
            return "nevar uzkrukjiit figuur";
        }
        if ($platums <= 0) {
            return "nevar uzkrukjiit figuur";
        }
        $this->nosaukums = 'Rectangle';
        $this->laukums = $augstums * $platums;

    }

}

class Triangle extends Forma
{
    public function __construct(float $a, float $b, float $h)
    {
        $this->nosaukums = 'Triangle';
        $this->laukums = 0.5 * $b * $h;
    }

}

echo new Square (5, 5);
echo new Rectangle (-10, 7);
echo new Triangle (0.5, 6, 8);


