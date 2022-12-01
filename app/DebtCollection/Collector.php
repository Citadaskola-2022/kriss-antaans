<?php

// declare(strict_types=1);

// require __DIR__ . '/../bootstrap/app.php';


namespace App\DebtCollection;

interface Collector
{
    public function getMoney(int $ownedAmount): float;
}