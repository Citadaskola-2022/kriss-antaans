<?php

declare(strict_types=1);


use Src\Phone;

$iphone = new Phone(11, 'Apple', 144, 71.4);
$android = new Phone(22, 'Samsung');

echo $iphone->getSize();

$iphone->installApp('Facebook');
$iphone->installApp('Instagram');
$iphone->instalApp('Duolingo');

echo implode(',', $iphone->getInstalledApps());

$iphone->turnOnSettings('DoNotDisturb');
$iphone->turnOnSettings('Mute');
$iphone->turnOnSettings('Light');

//require __DIR__ . '/../bootstrap/app.php';
