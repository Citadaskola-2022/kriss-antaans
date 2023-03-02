<?php


class Auto
{
    public $ražotājs;
    public $modelis;
    public  $gads;
    public $patēriņš;

    public function __construct($ražotājs, $modelis, $gads, $patēriņš)
    {
        $this ->ražotājs = $ražotājs;
        $this->modelis = $modelis;
        $this->gads =  $gads;
        $this->patēriņš = $patēriņš;
    }

    public function informācija()
    {
        echo "Ražotājs: $this->ražotājs\n";
        echo "Modelis:
         $this->modelis\n";
        echo "Gads: $this->gads\n";
        echo "Patēriņš: $this->patēriņš\n";
    }
}

class BenzīnaAuto extends Auto
{
    public
        $cena = 1.557;

    public function izmaksas($attālums)
    {
        $patēriņs = $this->patēriņš / 100;
        $izmaksas = $attālums * $patēriņs * $this->cena;
        echo "Izmaksas benzīna auto ($this->ražotājs $this-> modelis) izbraukšanai $attālums km: $izmaksas €\n";
    }


}



class Dīzeļauto extends Auto
{
    public $cena = 1.577;

    public function izmaksas($attālums)
    {
        $patēriņs = $this->patēriņš / 100;
        $izmaksas = $attālums * $patēriņs * $this->cena;
        echo "Izmaksas dīzeļauto ($this->ražotājs $this->modelis) izbraukšanai $attālums km: $izmaksas €\n";
    }
}

//  objekt
$bmw = new BenzīnaAuto("BMW", "320i", 2022, 7.6);
$audi = new Dīzeļauto("Audi", "A4", 2022, 4.5);

// informācija
$bmw->informācija();
$audi->informācija();



$bmw->izmaksas(220);
$audi->izmaksas(220);
?>

