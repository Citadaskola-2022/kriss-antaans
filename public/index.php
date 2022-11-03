<?php

declare(strict_types=1);


use App\ServiceCosts;

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
});

$transactions = new ServiceCosts(200);

$transactions->process();
