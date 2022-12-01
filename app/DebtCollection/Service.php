<?php

namespace App\DebtCollection;

class Service
{
    public function collectDebt(Rocky $collector): void
    {
        $ownedAmount = mt_rand(100, 1000)

    }


    public function collectDebt(Agency $collector): void
    {
        $amount = $collector->collect($ownedAmount);

        printf('collected $ %s out of $ %s ')
    }
}