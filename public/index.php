<?php

declare(strict_types=1);

spl_autoload_register(function ($class){
    $class = __DIR__ . '/../' .lcfirst(str_replace('\\','/', $class)) .'.php';
    require_once $class;
    var_dump($class);
});

use \App\Invoices\Credit\Bill as CreditBill;
use \App\Invoices\Invoice\Bill as InvoiceBill;
use \App\Invoices\Subscription\Bill as SubInvoice;

$creditBill = new CreditBill();
$subBill = new SubInvoice();

var_dump($creditBill, $subBill);

