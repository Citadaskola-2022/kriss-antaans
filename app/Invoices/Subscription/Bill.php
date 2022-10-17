<?php

declare(strict_types=1);

namespace App\Invoices\Bill;

class Bill
{
    public function __construct()
    {
        $costumerProfile = new CostumerProfile();
        $email = new \App\Notifications\Email();
        var_dump($email);
    }
}