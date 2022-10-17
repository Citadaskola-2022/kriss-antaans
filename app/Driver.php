<?php

declare(strict_types=1);

namespace App\Notifications\Driver;

class Driver
{
    public ?Licence $licence = null;
    public function getLicence(): ?Licence
    {
        return $this->licence;
    }
}