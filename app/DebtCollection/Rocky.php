<?php

namespace App\DebtCollection;

class Rocky implements Collector
{
    public function getMoney(int $ownedAmount): float
    {
        return $ownedAmount * 0.65;
    }
}
