<?php

namespace Snipet;

new Subscription(new StripeGateway());

class Subcription
{

    private Gateway $paymentGateway;

    public function __construct(Gateaway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }


    public function creat()
    {

    }

    public function cancel()
    {
        //API request
        $this->paymentGateway->findCostumer();
        $this->paymentGateway->findStripeCostumerSubscription();
        // cancel in datebase
    }

    public function invoice()
    {

    }

    public function swap()
    {

    }

}

interface Gateway
{
    public function findCostumer();

    public function findCostumerSubscriptions();

}


class StripeGateway implements Gateway
{
    public function findCostumer()
    {

    }

    public function findCostumerSubscriptions()
    {

    }
}

class BraintreeGateway implements Gateway
{

    public function findCostumer()
    {
        // TODO: Implement findCostumer() method.
    }

    public function findCostumerSubscriptions()
    {
        // TODO: Implement findCostumerSubscriptions() method.
    }
}
