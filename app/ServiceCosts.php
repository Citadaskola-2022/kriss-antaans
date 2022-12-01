<?php

namespace App;

class ServiceCosts
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process() : void
    {
        $this->prepareInvoice();

        $this->sendEmail();

        echo "Total amount is {$this->amount} for the service";
    }


    private function prepareInvoice()
    {

    }

    private function sendEmail()
    {

    }
}
