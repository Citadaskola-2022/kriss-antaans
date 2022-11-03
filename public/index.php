<?php

declare(strict_types=1);

use App\ServiceCosts;

require __DIR__ . '/../bootstrap/app.php';

$transactions = new ServiceCosts(200);
$transactions->process();
