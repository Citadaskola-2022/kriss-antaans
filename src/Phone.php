<?php

namespace src;

class Phone {
    private ?float $height;
    private ?float $width;

    private array $appList;
    private array $settings;

    public function __construct(
        private int $version,
        private string $manufacturer,
        ?float $height = null,
        ?float $width = null,
    ) {
        $this->height = $height;
        $this->width = $width;

        $this->height = $height;
        $this->width = $width;

    }

    public function installApp(string $app) :void
    {
        $this->appList[$app] = true;
    }

    public function uninstallApp(string $app) :void
    {
        $this->appList[$app] = false;
    }

    public function getInstalledApps(): array
    {
       return $this->appList;
    }

    public function isApplicationInstalled(string $app): array
    {
        return $this->appList;
    }

    public function getSize(): ?string
    {
        if (!$this->height && !$this->width) {
            return null;
        }
        return 'H: ' . $this->height . ', W: ' . $this->width;
    }

    public function turnOnSettings(string $string): void
    {
         $this->settings[$string] = true;
    }

    public function turnOfSettings(string $string): void
    {
        $this->settings[$string] = false;
    }
}






