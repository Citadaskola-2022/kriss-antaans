<?php

declare(strict_types=1);

//require_once __DIR__ . '/../app/Car.php';
//require_once __DIR__ . '/../app/Driver.php';
//require_once __DIR__ . '/../app/Licence.php';
//
//require_once __DIR__ . '/../app/Invoices/Invoice/Bill.php';
//require_once __DIR__ . '/../app/Invoices/Credit/Bill.php';
//require_once __DIR__ . '/../app/Invoices/Subscription/CostumerProfile.php';
//require_once __DIR__ . '/../app/Notifications/Email.php';
//
//require_once __DIR__ . '/../app/Invoices/Subscription/Bill.php';

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

//$creditBill = new Bill();
//$subtBill = new Bill();

var_dump($creditBill, $subBill);
//require __DIR__ . '/../bootstrap/app.php';
