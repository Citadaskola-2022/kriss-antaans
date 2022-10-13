<?php

class Driver
{
    public ?Licence $licence = null;


    public function getLicence(): ?Licence
    {
        return $this->licence;
    }
}