<?php

declare(strict_types=1);


spl_autoload_register(function ($class){
    $class = __DIR__ . '/../' .lcfirst(str_replace('\\','/', $class)) .'.php';
    require_once $class;
});

use \App\Invoices\Credit\Bill as CreditBill;
use \App\Invoices\Invoice\Bill as InvoiceBill;
use \App\Invoices\Subscription\Bill as SubInvoice;

$creditBill = new CreditBill();
$subBill = new SubInvoice();

var_dump($creditBill, $subBill);


use App\ServiceCosts;

use Doctrine\Inflector\InflectorFactory;
use Ramsey\Uuid\Uuid;

require __DIR__ . '/../bootstrap/app.php';

$transactions = new ServiceCosts(200);

//$transactions->process();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


//echo '<pre>';
var_dump($_ENV['SECRET_KEY']);

$inflector = InflectorFactory::create()->build();

$name = 'apple';
printf(
    'vienskaitlis: %s, daudzskaitlis: %s',
    $name, $inflector->pluralize($name)
);
echo '<br>';


$blogPost = 'This is MY 3yd4gy Blog post';
printf(
    'title: %s, url: %s',
    $blogPost, $inflector->urlize($blogPost)
);
echo '<br>';

$uuid = Uuid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);

